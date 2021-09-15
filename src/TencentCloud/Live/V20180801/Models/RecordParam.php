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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Recording template parameter.
 *
 * @method integer getRecordInterval() Obtain Max recording time per file
Default value: `1800` (seconds)
Value range: 30-7200
This parameter is invalid for HLS. Only one HLS file will be generated from push start to push end.
 * @method void setRecordInterval(integer $RecordInterval) Set Max recording time per file
Default value: `1800` (seconds)
Value range: 30-7200
This parameter is invalid for HLS. Only one HLS file will be generated from push start to push end.
 * @method integer getStorageTime() Obtain Storage duration of the recording file
Value range: 0-129600000 seconds (0-1500 days)
`0`: permanent
 * @method void setStorageTime(integer $StorageTime) Set Storage duration of the recording file
Value range: 0-129600000 seconds (0-1500 days)
`0`: permanent
 * @method integer getEnable() Obtain Whether to enable recording in the current format. Default value: 0. 0: no, 1: yes.
 * @method void setEnable(integer $Enable) Set Whether to enable recording in the current format. Default value: 0. 0: no, 1: yes.
 * @method integer getVodSubAppId() Obtain VOD subapplication ID.
 * @method void setVodSubAppId(integer $VodSubAppId) Set VOD subapplication ID.
 * @method string getVodFileName() Obtain Recording filename.
Supported special placeholders include:
{StreamID}: stream ID
{StartYear}: start time - year
{StartMonth}: start time - month
{StartDay}: start time - day
{StartHour}: start time - hour
{StartMinute}: start time - minute
{StartSecond}: start time - second
{StartMillisecond}: start time - millisecond
{EndYear}: end time - year
{EndMonth}: end time - month
{EndDay}: end time - day
{EndHour}: end time - hour
{EndMinute}: end time - minute
{EndSecond}: end time - second
{EndMillisecond}: end time - millisecond

If this parameter is not set, the recording filename will be `{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}` by default
 * @method void setVodFileName(string $VodFileName) Set Recording filename.
Supported special placeholders include:
{StreamID}: stream ID
{StartYear}: start time - year
{StartMonth}: start time - month
{StartDay}: start time - day
{StartHour}: start time - hour
{StartMinute}: start time - minute
{StartSecond}: start time - second
{StartMillisecond}: start time - millisecond
{EndYear}: end time - year
{EndMonth}: end time - month
{EndDay}: end time - day
{EndHour}: end time - hour
{EndMinute}: end time - minute
{EndSecond}: end time - second
{EndMillisecond}: end time - millisecond

If this parameter is not set, the recording filename will be `{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}` by default
 * @method string getProcedure() Obtain Task flow
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setProcedure(string $Procedure) Set Task flow
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getStorageMode() Obtain Video storage class. Valid values:
`normal`: STANDARD
`cold`: STANDARD_IA
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setStorageMode(string $StorageMode) Set Video storage class. Valid values:
`normal`: STANDARD
`cold`: STANDARD_IA
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getClassId() Obtain VOD subapplication category
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setClassId(integer $ClassId) Set VOD subapplication category
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class RecordParam extends AbstractModel
{
    /**
     * @var integer Max recording time per file
Default value: `1800` (seconds)
Value range: 30-7200
This parameter is invalid for HLS. Only one HLS file will be generated from push start to push end.
     */
    public $RecordInterval;

    /**
     * @var integer Storage duration of the recording file
Value range: 0-129600000 seconds (0-1500 days)
`0`: permanent
     */
    public $StorageTime;

    /**
     * @var integer Whether to enable recording in the current format. Default value: 0. 0: no, 1: yes.
     */
    public $Enable;

    /**
     * @var integer VOD subapplication ID.
     */
    public $VodSubAppId;

    /**
     * @var string Recording filename.
Supported special placeholders include:
{StreamID}: stream ID
{StartYear}: start time - year
{StartMonth}: start time - month
{StartDay}: start time - day
{StartHour}: start time - hour
{StartMinute}: start time - minute
{StartSecond}: start time - second
{StartMillisecond}: start time - millisecond
{EndYear}: end time - year
{EndMonth}: end time - month
{EndDay}: end time - day
{EndHour}: end time - hour
{EndMinute}: end time - minute
{EndSecond}: end time - second
{EndMillisecond}: end time - millisecond

If this parameter is not set, the recording filename will be `{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}` by default
     */
    public $VodFileName;

    /**
     * @var string Task flow
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Procedure;

    /**
     * @var string Video storage class. Valid values:
`normal`: STANDARD
`cold`: STANDARD_IA
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $StorageMode;

    /**
     * @var integer VOD subapplication category
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $ClassId;

    /**
     * @param integer $RecordInterval Max recording time per file
Default value: `1800` (seconds)
Value range: 30-7200
This parameter is invalid for HLS. Only one HLS file will be generated from push start to push end.
     * @param integer $StorageTime Storage duration of the recording file
Value range: 0-129600000 seconds (0-1500 days)
`0`: permanent
     * @param integer $Enable Whether to enable recording in the current format. Default value: 0. 0: no, 1: yes.
     * @param integer $VodSubAppId VOD subapplication ID.
     * @param string $VodFileName Recording filename.
Supported special placeholders include:
{StreamID}: stream ID
{StartYear}: start time - year
{StartMonth}: start time - month
{StartDay}: start time - day
{StartHour}: start time - hour
{StartMinute}: start time - minute
{StartSecond}: start time - second
{StartMillisecond}: start time - millisecond
{EndYear}: end time - year
{EndMonth}: end time - month
{EndDay}: end time - day
{EndHour}: end time - hour
{EndMinute}: end time - minute
{EndSecond}: end time - second
{EndMillisecond}: end time - millisecond

If this parameter is not set, the recording filename will be `{StreamID}_{StartYear}-{StartMonth}-{StartDay}-{StartHour}-{StartMinute}-{StartSecond}_{EndYear}-{EndMonth}-{EndDay}-{EndHour}-{EndMinute}-{EndSecond}` by default
     * @param string $Procedure Task flow
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $StorageMode Video storage class. Valid values:
`normal`: STANDARD
`cold`: STANDARD_IA
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $ClassId VOD subapplication category
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("RecordInterval",$param) and $param["RecordInterval"] !== null) {
            $this->RecordInterval = $param["RecordInterval"];
        }

        if (array_key_exists("StorageTime",$param) and $param["StorageTime"] !== null) {
            $this->StorageTime = $param["StorageTime"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VodSubAppId",$param) and $param["VodSubAppId"] !== null) {
            $this->VodSubAppId = $param["VodSubAppId"];
        }

        if (array_key_exists("VodFileName",$param) and $param["VodFileName"] !== null) {
            $this->VodFileName = $param["VodFileName"];
        }

        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
        }

        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }
    }
}
