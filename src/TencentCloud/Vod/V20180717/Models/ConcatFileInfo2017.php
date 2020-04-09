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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of source file for video splicing (v2017)
 *
 * @method integer getErrCode() Obtain Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrCode(integer $ErrCode) Set Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileId() Obtain ID of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileId(string $FileId) Set ID of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileUrl() Obtain Address of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileUrl(string $FileUrl) Set Address of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileType() Obtain Format of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileType(string $FileType) Set Format of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ConcatFileInfo2017 extends AbstractModel
{
    /**
     * @var integer Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrCode;

    /**
     * @var string Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string ID of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileId;

    /**
     * @var string Address of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileUrl;

    /**
     * @var string Format of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileType;

    /**
     * @param integer $ErrCode Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Message Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileId ID of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileUrl Address of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileType Format of source file for video splicing.
Note: this field may return null, indicating that no valid values can be obtained.
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
