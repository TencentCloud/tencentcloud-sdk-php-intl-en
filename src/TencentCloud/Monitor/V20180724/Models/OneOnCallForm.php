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
 * Shift details
 *
 * @method string getOnCallFormID() Obtain Duty ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOnCallFormID(string $OnCallFormID) Set Duty ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOnCallFormName() Obtain On-call name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOnCallFormName(string $OnCallFormName) Set On-call name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOnCallFormDesc() Obtain Shift description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOnCallFormDesc(string $OnCallFormDesc) Set Shift description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getStaffInfos() Obtain On-duty personnel
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStaffInfos(array $StaffInfos) Set On-duty personnel
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRotationType() Obtain Rotation type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRotationType(string $RotationType) Set Rotation type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getShiftTime() Obtain Shift change time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShiftTime(string $ShiftTime) Set Shift change time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEffectiveStartTime() Obtain Start time of the on-call validity period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectiveStartTime(integer $EffectiveStartTime) Set Start time of the on-call validity period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEffectiveEndTime() Obtain End time of the on-call validity period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectiveEndTime(integer $EffectiveEndTime) Set End time of the on-call validity period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getTimeZone() Obtain Time zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeZone(float $TimeZone) Set Time zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCoverStaffInfos() Obtain Shift information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoverStaffInfos(array $CoverStaffInfos) Set Shift information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag bound to the template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag bound to the template
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OneOnCallForm extends AbstractModel
{
    /**
     * @var string Duty ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OnCallFormID;

    /**
     * @var string On-call name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OnCallFormName;

    /**
     * @var string Shift description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OnCallFormDesc;

    /**
     * @var array On-duty personnel
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StaffInfos;

    /**
     * @var string Rotation type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RotationType;

    /**
     * @var string Shift change time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShiftTime;

    /**
     * @var integer Start time of the on-call validity period
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectiveStartTime;

    /**
     * @var integer End time of the on-call validity period
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectiveEndTime;

    /**
     * @var float Time zone
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeZone;

    /**
     * @var array Shift information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoverStaffInfos;

    /**
     * @var array Tag bound to the template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $OnCallFormID Duty ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OnCallFormName On-call name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OnCallFormDesc Shift description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $StaffInfos On-duty personnel
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RotationType Rotation type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ShiftTime Shift change time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EffectiveStartTime Start time of the on-call validity period
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EffectiveEndTime End time of the on-call validity period
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $TimeZone Time zone
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CoverStaffInfos Shift information.
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

        if (array_key_exists("StaffInfos",$param) and $param["StaffInfos"] !== null) {
            $this->StaffInfos = [];
            foreach ($param["StaffInfos"] as $key => $value){
                $obj = new StaffInfo();
                $obj->deserialize($value);
                array_push($this->StaffInfos, $obj);
            }
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

        if (array_key_exists("CoverStaffInfos",$param) and $param["CoverStaffInfos"] !== null) {
            $this->CoverStaffInfos = [];
            foreach ($param["CoverStaffInfos"] as $key => $value){
                $obj = new CoverStaffInfo();
                $obj->deserialize($value);
                array_push($this->CoverStaffInfos, $obj);
            }
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
