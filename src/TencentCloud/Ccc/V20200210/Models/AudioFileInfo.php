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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio file review information
 *
 * @method integer getFileId() Obtain File ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileId(integer $FileId) Set File ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCustomFileName() Obtain File alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomFileName(string $CustomFileName) Set File alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAudioFileName() Obtain Filename
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudioFileName(string $AudioFileName) Set Filename
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Review status, 0-Not reviewed, 1-Approved, 2-Rejected
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Review status, 0-Not reviewed, 1-Approved, 2-Rejected
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AudioFileInfo extends AbstractModel
{
    /**
     * @var integer File ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileId;

    /**
     * @var string File alias
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomFileName;

    /**
     * @var string Filename
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudioFileName;

    /**
     * @var integer Review status, 0-Not reviewed, 1-Approved, 2-Rejected
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param integer $FileId File ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CustomFileName File alias
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AudioFileName Filename
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Review status, 0-Not reviewed, 1-Approved, 2-Rejected
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("CustomFileName",$param) and $param["CustomFileName"] !== null) {
            $this->CustomFileName = $param["CustomFileName"];
        }

        if (array_key_exists("AudioFileName",$param) and $param["AudioFileName"] !== null) {
            $this->AudioFileName = $param["AudioFileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
