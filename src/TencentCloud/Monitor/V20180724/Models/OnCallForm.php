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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shift information
 *
 * @method string getOnCallFormID() Obtain Schedule ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOnCallFormID(string $OnCallFormID) Set Schedule ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOnCallFormName() Obtain Shift name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOnCallFormName(string $OnCallFormName) Set Shift name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOnCallFormDesc() Obtain Schedule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOnCallFormDesc(string $OnCallFormDesc) Set Schedule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRotationType() Obtain Rotation type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRotationType(string $RotationType) Set Rotation type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getShiftTime() Obtain Shift change time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShiftTime(string $ShiftTime) Set Shift change time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEffectiveStartTime() Obtain Validity start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectiveStartTime(integer $EffectiveStartTime) Set Validity start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEffectiveEndTime() Obtain Validity end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectiveEndTime(integer $EffectiveEndTime) Set Validity end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getTimeZone() Obtain Time zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeZone(float $TimeZone) Set Time zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCurrOnCallStaffs() Obtain Current on-duty personnel
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrOnCallStaffs(array $CurrOnCallStaffs) Set Current on-duty personnel
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag bound to the template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag bound to the template
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OnCallForm extends AbstractModel
{
    /**
     * @var string Schedule ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OnCallFormID;

    /**
     * @var string Shift name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OnCallFormName;

    /**
     * @var string Schedule description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OnCallFormDesc;

    /**
     * @var string Rotation type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RotationType;

    /**
     * @var string Shift change time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShiftTime;

    /**
     * @var integer Validity start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectiveStartTime;

    /**
     * @var integer Validity end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectiveEndTime;

    /**
     * @var float Time zone
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeZone;

    /**
     * @var array Current on-duty personnel
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurrOnCallStaffs;

    /**
     * @var array Tag bound to the template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $OnCallFormID Schedule ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OnCallFormName Shift name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OnCallFormDesc Schedule description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RotationType Rotation type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ShiftTime Shift change time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EffectiveStartTime Validity start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EffectiveEndTime Validity end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $TimeZone Time zone
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CurrOnCallStaffs Current on-duty personnel
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag bound to the template
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
        if (array_key_exists("OnCallFormID",$param) and $param["OnCallFormID"] !== null) {
            $this->OnCallFormID = $param["OnCallFormID"];
        }

        if (array_key_exists("OnCallFormName",$param) and $param["OnCallFormName"] !== null) {
            $this->OnCallFormName = $param["OnCallFormName"];
        }

        if (array_key_exists("OnCallFormDesc",$param) and $param["OnCallFormDesc"] !== null) {
            $this->OnCallFormDesc = $param["OnCallFormDesc"];
        }

        if (array_key_exists("RotationType",$param) and $param["RotationType"] !== null) {
            $this->RotationType = $param["RotationType"];
        }

        if (array_key_exists("ShiftTime",$param) and $param["ShiftTime"] !== null) {
            $this->ShiftTime = $param["ShiftTime"];
        }

        if (array_key_exists("EffectiveStartTime",$param) and $param["EffectiveStartTime"] !== null) {
            $this->EffectiveStartTime = $param["EffectiveStartTime"];
        }

        if (array_key_exists("EffectiveEndTime",$param) and $param["EffectiveEndTime"] !== null) {
            $this->EffectiveEndTime = $param["EffectiveEndTime"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("CurrOnCallStaffs",$param) and $param["CurrOnCallStaffs"] !== null) {
            $this->CurrOnCallStaffs = $param["CurrOnCallStaffs"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
