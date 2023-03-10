<?php
/*
 * http_request class
 *
 * useful to avoid allow_url_fopen_wrapper issues
 * and to get or post data from anywhere we want
 *
 */

class http_request
{
    function http_request($url = '', $method = 'GET')
    {
        if ($url)
        {
            $this->url = parse_url($url);
        }
        $this->useragent = 'Mozilla/4.0 (compatible)';
        $this->method = $method;
        $this->postform = array();
        $this->postdata = array();
        $this->headers = array();
        $this->socket_timeout = 5;
    }

    // socket timeout is the amount of time in second which is waited
    // for incoming data, set higher if you request stuff from heavy-loaded
    // scripts or compressed data streams
    function setSockettimeout($int)
    {
        $this->socket_timeout = $int;
    }

    function get_content()
    {
        $this->request();
        return $this->content;
    }

    function get_header()
    {
        $this->request();
        return $this->header;
    }

    function get_sent()
    {
        return $this->sent;
    }

    function get_recv()
    {
        return $this->recv;
    }

    function connect()
    {
        if ($this->fp)
        {
            return true;
        }

        $this->fp = @fsockopen($this->url["host"], 80, $errno, $errstr, 5);
        if (!$this->fp)
        {
            $this->_errno = $errno;
            $this->_errstr = $errstr;
            return false;
        }
        return true;
    }

    function getError()
    {
        return 'Error occured with fsockopen: '.$this->_errstr.' ('.$this->_errno.')<br/>'."\n";
    }

    function request()
    {
        if ($this->requested)
        {
            return;
        }
        $this->connect();
        $fp = &$this->fp;

        if (!is_resource($fp))
        {
            return false;
        }

        // define a linefeed (carriage return + newline)
        $lf = "\r\n";

        $request_string = $this->method.' '.$this->url['path'].'?'.$this->url['query'].' HTTP/1.0'.$lf
                          .'Accept-Language: en'.$lf
                          .'User-Agent: '.$this->useragent.$lf
                          .'Host: '.$this->url['host'].$lf
                          .'Connection: close'.$lf;
        if (count($this->headers))
        {
            $request_string .= join($lf, $this->headers).$lf;
        }
        if ($this->method == 'POST')
        {
            $boundary = substr(md5(rand(0,32000)),0,10);
            $data = '--'.$boundary.$lf;

            foreach ($this->postform as $name => $content_file)
            {
                $data .= 'Content-Disposition: form-data; name="'.$name.'"'.$lf.$lf;
                $data .= $content_file.$lf;
                $data .= '--'.$boundary.$lf;
            }

            foreach ($this->postdata as $name => $content_file)
            {
                $data .= 'Content-Disposition: form-data; name="'.$name.'"; filename="'.$name.'"'.$lf;
                $data .= 'Content-Type: text/plain'.$lf.$lf;
                $data .= $content_file.$lf;
                $data .= '--'.$boundary.$lf;
            }

            $request_string .= 'Content-Length: '.strlen($data).$lf;
            $request_string .= 'Content-Type: multipart/form-data, boundary='.$boundary.$lf;
        }
        else
        {
            $data = '';
        }
        $request_string .= $lf;

        fputs($fp, $request_string.$data);
        $this->sent = strlen($header)+strlen($data);

        $header = 1;
        socket_set_timeout($fp, $this->socket_timeout);
        while ($line = fgets($fp, 4096))
        {
            if ($header)
            {
                $http_header .= $line;
            }
            else
            {
                $file .= $line;
            }
            if ($header && $line == $lf)
            {
                $header = 0;
            }
        }
        fclose($fp);
        $this->header = $http_header;
        $this->content = $file;
        $this->recv = strlen($http_header)+strlen($file);
        $this->requested = true;
    }

    function url($url)
    {
        $this->url = parse_url($url);
    }

    // this is to send file-data to be accessed with $_FILES[$name]
    function set_postdata($name, $data)
    {
        $this->method = 'POST';
        $this->postdata[$name] = $data;
    }

    // this function sends form data objects like $_POST[$name] = $data
    function set_postform($name, $data)
    {
        $this->method = 'POST';
        $this->postform[$name] = $data;
    }

    function set_useragent($string)
    {
        $this->useragent = $string;
    }

    function set_header($headerstring)
    {
        if (!strpos($headerstring, ':'))
        {
            return;
        }
        $this->headers[$headerstring] = $headerstring;
    }
}
?>