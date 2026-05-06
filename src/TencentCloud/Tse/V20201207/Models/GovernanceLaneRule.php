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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Lane rule
 *
 * @method string getID() Obtain Lane rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setID(string $ID) Set Lane rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain lane name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set lane name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLaneGroup() Obtain Swimlane group of the lane
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLaneGroup(string $LaneGroup) Set Swimlane group of the lane
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnable() Obtain Rule Enable Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnable(boolean $Enable) Set Rule Enable Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTrafficLabels() Obtain Traffic Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTrafficLabels(array $TrafficLabels) Set Traffic Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTrafficMatchMode() Obtain Multiple traffic tag matching methods
AND
OR
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTrafficMatchMode(string $TrafficMatchMode) Set Multiple traffic tag matching methods
AND
OR
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLaneMatchMode() Obtain Lane match mode
STRICT: Strict match
PERMISSIVE: Loose match
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLaneMatchMode(string $LaneMatchMode) Set Lane match mode
STRICT: Strict match
PERMISSIVE: Loose match
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TrafficGray getTrafficGray() Obtain Lane grayscale rule
 * @method void setTrafficGray(TrafficGray $TrafficGray) Set Lane grayscale rule
 * @method string getDescription() Obtain Lane rule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Lane rule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLaneLabelValue() Obtain Lane tag content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLaneLabelValue(string $LaneLabelValue) Set Lane tag content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnableTime() Obtain Enabling time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableTime(string $EnableTime) Set Enabling time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPriority() Obtain Lane rule priority
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPriority(integer $Priority) Set Lane rule priority
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRevision() Obtain Rule abstract
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRevision(string $Revision) Set Rule abstract
Note: This field may return null, indicating that no valid values can be obtained.
 */
class GovernanceLaneRule extends AbstractModel
{
    /**
     * @var string Lane rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @var string lane name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Swimlane group of the lane
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LaneGroup;

    /**
     * @var boolean Rule Enable Status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var array Traffic Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TrafficLabels;

    /**
     * @var string Multiple traffic tag matching methods
AND
OR
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TrafficMatchMode;

    /**
     * @var string Lane match mode
STRICT: Strict match
PERMISSIVE: Loose match
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LaneMatchMode;

    /**
     * @var TrafficGray Lane grayscale rule
     */
    public $TrafficGray;

    /**
     * @var string Lane rule description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Lane tag content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LaneLabelValue;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Enabling time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableTime;

    /**
     * @var string Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var integer Lane rule priority
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Priority;

    /**
     * @var string Rule abstract
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Revision;

    /**
     * @param string $ID Lane rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name lane name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LaneGroup Swimlane group of the lane
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Enable Rule Enable Status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TrafficLabels Traffic Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TrafficMatchMode Multiple traffic tag matching methods
AND
OR
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LaneMatchMode Lane match mode
STRICT: Strict match
PERMISSIVE: Loose match
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TrafficGray $TrafficGray Lane grayscale rule
     * @param string $Description Lane rule description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LaneLabelValue Lane tag content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EnableTime Enabling time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Priority Lane rule priority
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Revision Rule abstract
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LaneGroup",$param) and $param["LaneGroup"] !== null) {
            $this->LaneGroup = $param["LaneGroup"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("TrafficLabels",$param) and $param["TrafficLabels"] !== null) {
            $this->TrafficLabels = [];
            foreach ($param["TrafficLabels"] as $key => $value){
                $obj = new Argument();
                $obj->deserialize($value);
                array_push($this->TrafficLabels, $obj);
            }
        }

        if (array_key_exists("TrafficMatchMode",$param) and $param["TrafficMatchMode"] !== null) {
            $this->TrafficMatchMode = $param["TrafficMatchMode"];
        }

        if (array_key_exists("LaneMatchMode",$param) and $param["LaneMatchMode"] !== null) {
            $this->LaneMatchMode = $param["LaneMatchMode"];
        }

        if (array_key_exists("TrafficGray",$param) and $param["TrafficGray"] !== null) {
            $this->TrafficGray = new TrafficGray();
            $this->TrafficGray->deserialize($param["TrafficGray"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LaneLabelValue",$param) and $param["LaneLabelValue"] !== null) {
            $this->LaneLabelValue = $param["LaneLabelValue"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EnableTime",$param) and $param["EnableTime"] !== null) {
            $this->EnableTime = $param["EnableTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }
    }
}
