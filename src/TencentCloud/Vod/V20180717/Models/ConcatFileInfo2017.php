<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Source file information for video stitching (2017 version)
 *
 * @method integer getErrCode() Obtain Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method string getFileId() Obtain ID of the source file for video splicing.
 * @method void setFileId(string $FileId) Set ID of the source file for video splicing.
 * @method string getFileUrl() Obtain Domain names or IP addresses of source files for video splicing.
 * @method void setFileUrl(string $FileUrl) Set Domain names or IP addresses of source files for video splicing.
 * @method string getFileType() Obtain Format of the source file for video splicing.
 * @method void setFileType(string $FileType) Set Format of the source file for video splicing.
 */
class ConcatFileInfo2017 extends AbstractModel
{
    /**
     * @var integer Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var string ID of the source file for video splicing.
     */
    public $FileId;

    /**
     * @var string Domain names or IP addresses of source files for video splicing.
     */
    public $FileUrl;

    /**
     * @var string Format of the source file for video splicing.
     */
    public $FileType;

    /**
     * @param integer $ErrCode Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
     * @param string $Message Error message.
     * @param string $FileId ID of the source file for video splicing.
     * @param string $FileUrl Domain names or IP addresses of source files for video splicing.
     * @param string $FileType Format of the source file for video splicing.
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
        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
