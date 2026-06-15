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
 * CreateOnCallForm request structure.
 *
 * @method string getModule() Obtain The fixed value is monitor.
 * @method void setModule(string $Module) Set The fixed value is monitor.
 * @method string getOnCallFormName() Obtain On-call schedule name.
 * @method void setOnCallFormName(string $OnCallFormName) Set On-call schedule name.
 * @method array getStaffInfos() Obtain On-call personnel ID group.
 * @method void setStaffInfos(array $StaffInfos) Set On-call personnel ID group.
 * @method string getRotationType() Obtain Rotation type.
 * @method void setRotationType(string $RotationType) Set Rotation type.
 * @method string getShiftTime() Obtain Shift change time.
 * @method void setShiftTime(string $ShiftTime) Set Shift change time.
 * @method integer getEffectiveStartTime() Obtain Effect time. Unit: seconds.
 * @method void setEffectiveStartTime(integer $EffectiveStartTime) Set Effect time. Unit: seconds.
 * @method integer getEffectiveEndTime() Obtain End time of the validity period (in seconds).
 * @method void setEffectiveEndTime(integer $EffectiveEndTime) Set End time of the validity period (in seconds).
 * @method float getTimeZone() Obtain Time zone (-12 to 12).
 * @method void setTimeZone(float $TimeZone) Set Time zone (-12 to 12).
 * @method string getOnCallFormDesc() Obtain Description of the shift schedule.
 * @method void setOnCallFormDesc(string $OnCallFormDesc) Set Description of the shift schedule.
 * @method array getCoverStaffInfos() Obtain Shift information.
 * @method void setCoverStaffInfos(array $CoverStaffInfos) Set Shift information.
 * @method array getTags() Obtain Tag bound to the template
 * @method void setTags(array $Tags) Set Tag bound to the template
 */
class CreateOnCallFormRequest extends AbstractModel
{
    /**
     * @var string The fixed value is monitor.
     */
    public $Module;

    /**
     * @var string On-call schedule name.
     */
    public $OnCallFormName;

    /**
     * @var array On-call personnel ID group.
     */
    public $StaffInfos;

    /**
     * @var string Rotation type.
     */
    public $RotationType;

    /**
     * @var string Shift change time.
     */
    public $ShiftTime;

    /**
     * @var integer Effect time. Unit: seconds.
     */
    public $EffectiveStartTime;

    /**
     * @var integer End time of the validity period (in seconds).
     */
    public $EffectiveEndTime;

    /**
     * @var float Time zone (-12 to 12).
     */
    public $TimeZone;

    /**
     * @var string Description of the shift schedule.
     */
    public $OnCallFormDesc;

    /**
     * @var array Shift information.
     */
    public $CoverStaffInfos;

    /**
     * @var array Tag bound to the template
     */
    public $Tags;

    /**
     * @param string $Module The fixed value is monitor.
     * @param string $OnCallFormName On-call schedule name.
     * @param array $StaffInfos On-call personnel ID group.
     * @param string $RotationType Rotation type.
     * @param string $ShiftTime Shift change time.
     * @param integer $EffectiveStartTime Effect time. Unit: seconds.
     * @param integer $EffectiveEndTime End time of the validity period (in seconds).
     * @param float $TimeZone Time zone (-12 to 12).
     * @param string $OnCallFormDesc Description of the shift schedule.
     * @param array $CoverStaffInfos Shift information.
     * @param array $Tags Tag bound to the template
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("OnCallFormName",$param) and $param["OnCallFormName"] !== null) {
            $this->OnCallFormName = $param["OnCallFormName"];
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

        if (array_key_exists("OnCallFormDesc",$param) and $param["OnCallFormDesc"] !== null) {
            $this->OnCallFormDesc = $param["OnCallFormDesc"];
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
