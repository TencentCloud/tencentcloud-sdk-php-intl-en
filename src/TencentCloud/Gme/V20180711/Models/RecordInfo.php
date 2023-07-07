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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about the recording task in a room.
Note: This field may return `null`, indicating that no valid values can be obtained.
 *
 * @method string getUserId() Obtain User ID. The value is `0` in mixed streams recording mode.
 * @method void setUserId(string $UserId) Set User ID. The value is `0` in mixed streams recording mode.
 * @method string getFileName() Obtain Recording filename.
 * @method void setFileName(string $FileName) Set Recording filename.
 * @method integer getRecordBeginTime() Obtain Recording start time, which is a Unix timestamp. Example: 1234567868.
 * @method void setRecordBeginTime(integer $RecordBeginTime) Set Recording start time, which is a Unix timestamp. Example: 1234567868.
 * @method integer getRecordStatus() Obtain Recording status. Valid values: `2`: recording; `10`: to be transcoded; `11`: transcoding; `12`: uploading; `13`: uploaded; `14`: user notified.
 * @method void setRecordStatus(integer $RecordStatus) Set Recording status. Valid values: `2`: recording; `10`: to be transcoded; `11`: transcoding; `12`: uploading; `13`: uploaded; `14`: user notified.
 */
class RecordInfo extends AbstractModel
{
    /**
     * @var string User ID. The value is `0` in mixed streams recording mode.
     */
    public $UserId;

    /**
     * @var string Recording filename.
     */
    public $FileName;

    /**
     * @var integer Recording start time, which is a Unix timestamp. Example: 1234567868.
     */
    public $RecordBeginTime;

    /**
     * @var integer Recording status. Valid values: `2`: recording; `10`: to be transcoded; `11`: transcoding; `12`: uploading; `13`: uploaded; `14`: user notified.
     */
    public $RecordStatus;

    /**
     * @param string $UserId User ID. The value is `0` in mixed streams recording mode.
     * @param string $FileName Recording filename.
     * @param integer $RecordBeginTime Recording start time, which is a Unix timestamp. Example: 1234567868.
     * @param integer $RecordStatus Recording status. Valid values: `2`: recording; `10`: to be transcoded; `11`: transcoding; `12`: uploading; `13`: uploaded; `14`: user notified.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("RecordBeginTime",$param) and $param["RecordBeginTime"] !== null) {
            $this->RecordBeginTime = $param["RecordBeginTime"];
        }

        if (array_key_exists("RecordStatus",$param) and $param["RecordStatus"] !== null) {
            $this->RecordStatus = $param["RecordStatus"];
        }
    }
}
