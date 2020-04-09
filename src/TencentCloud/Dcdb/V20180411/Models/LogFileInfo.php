<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a pulled log
 *
 * @method integer getMtime() Obtain Last modified time of a log
 * @method void setMtime(integer $Mtime) Set Last modified time of a log
 * @method integer getLength() Obtain File length
 * @method void setLength(integer $Length) Set File length
 * @method string getUri() Obtain Uniform resource identifier (URI) used during log download
 * @method void setUri(string $Uri) Set Uniform resource identifier (URI) used during log download
 * @method string getFileName() Obtain Filename
 * @method void setFileName(string $FileName) Set Filename
 */
class LogFileInfo extends AbstractModel
{
    /**
     * @var integer Last modified time of a log
     */
    public $Mtime;

    /**
     * @var integer File length
     */
    public $Length;

    /**
     * @var string Uniform resource identifier (URI) used during log download
     */
    public $Uri;

    /**
     * @var string Filename
     */
    public $FileName;

    /**
     * @param integer $Mtime Last modified time of a log
     * @param integer $Length File length
     * @param string $Uri Uniform resource identifier (URI) used during log download
     * @param string $FileName Filename
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Mtime",$param) and $param["Mtime"] !== null) {
            $this->Mtime = $param["Mtime"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
