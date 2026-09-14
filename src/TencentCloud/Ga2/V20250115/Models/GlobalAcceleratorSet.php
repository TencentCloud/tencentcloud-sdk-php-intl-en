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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Global acceleration instance information
 *
 * @method string getGlobalAcceleratorId() Obtain <p>Global acceleration instance ID.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Global acceleration instance ID.</p>
 * @method string getName() Obtain <p>Global acceleration instance name.</p>
 * @method void setName(string $Name) Set <p>Global acceleration instance name.</p>
 * @method string getDescription() Obtain <p>Global acceleration instance description.</p>
 * @method void setDescription(string $Description) Set <p>Global acceleration instance description.</p>
 * @method string getCreateTime() Obtain <p>Instance creation time of the global acceleration instance.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Instance creation time of the global acceleration instance.</p>
 * @method string getState() Obtain <p>Global acceleration instance status.</p>
 * @method void setState(string $State) Set <p>Global acceleration instance status.</p>
 * @method string getInstanceChargeType() Obtain <p>Billing type of a global acceleration instance.</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Billing type of a global acceleration instance.</p>
 * @method string getDdosId() Obtain <p>DDoS ID of the global acceleration instance.</p>
 * @method void setDdosId(string $DdosId) Set <p>DDoS ID of the global acceleration instance.</p>
 * @method integer getListenerCounts() Obtain <p>Number of listeners of the associated acceleration instance.</p>
 * @method void setListenerCounts(integer $ListenerCounts) Set <p>Number of listeners of the associated acceleration instance.</p>
 * @method integer getAcceleratorAreaCounts() Obtain <p>Count of acceleration regions belonging to the acceleration instance.</p>
 * @method void setAcceleratorAreaCounts(integer $AcceleratorAreaCounts) Set <p>Count of acceleration regions belonging to the acceleration instance.</p>
 * @method string getStatus() Obtain <p>Global acceleration instance status.</p>
 * @method void setStatus(string $Status) Set <p>Global acceleration instance status.</p>
 * @method string getCname() Obtain <p>Domain name.</p>
 * @method void setCname(string $Cname) Set <p>Domain name.</p>
 * @method string getCrossBorderType() Obtain <p>Cross-border type; HighQuality (high-quality cross-border), Unicom (China Unicom cross-border), NotAvailable (not enabled).</p>
 * @method void setCrossBorderType(string $CrossBorderType) Set <p>Cross-border type; HighQuality (high-quality cross-border), Unicom (China Unicom cross-border), NotAvailable (not enabled).</p>
 * @method array getTagSet() Obtain <p>Tag information.</p>
 * @method void setTagSet(array $TagSet) Set <p>Tag information.</p>
 */
class GlobalAcceleratorSet extends AbstractModel
{
    /**
     * @var string <p>Global acceleration instance ID.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var string <p>Global acceleration instance name.</p>
     */
    public $Name;

    /**
     * @var string <p>Global acceleration instance description.</p>
     */
    public $Description;

    /**
     * @var string <p>Instance creation time of the global acceleration instance.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Global acceleration instance status.</p>
     */
    public $State;

    /**
     * @var string <p>Billing type of a global acceleration instance.</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>DDoS ID of the global acceleration instance.</p>
     */
    public $DdosId;

    /**
     * @var integer <p>Number of listeners of the associated acceleration instance.</p>
     */
    public $ListenerCounts;

    /**
     * @var integer <p>Count of acceleration regions belonging to the acceleration instance.</p>
     */
    public $AcceleratorAreaCounts;

    /**
     * @var string <p>Global acceleration instance status.</p>
     */
    public $Status;

    /**
     * @var string <p>Domain name.</p>
     */
    public $Cname;

    /**
     * @var string <p>Cross-border type; HighQuality (high-quality cross-border), Unicom (China Unicom cross-border), NotAvailable (not enabled).</p>
     */
    public $CrossBorderType;

    /**
     * @var array <p>Tag information.</p>
     */
    public $TagSet;

    /**
     * @param string $GlobalAcceleratorId <p>Global acceleration instance ID.</p>
     * @param string $Name <p>Global acceleration instance name.</p>
     * @param string $Description <p>Global acceleration instance description.</p>
     * @param string $CreateTime <p>Instance creation time of the global acceleration instance.</p>
     * @param string $State <p>Global acceleration instance status.</p>
     * @param string $InstanceChargeType <p>Billing type of a global acceleration instance.</p>
     * @param string $DdosId <p>DDoS ID of the global acceleration instance.</p>
     * @param integer $ListenerCounts <p>Number of listeners of the associated acceleration instance.</p>
     * @param integer $AcceleratorAreaCounts <p>Count of acceleration regions belonging to the acceleration instance.</p>
     * @param string $Status <p>Global acceleration instance status.</p>
     * @param string $Cname <p>Domain name.</p>
     * @param string $CrossBorderType <p>Cross-border type; HighQuality (high-quality cross-border), Unicom (China Unicom cross-border), NotAvailable (not enabled).</p>
     * @param array $TagSet <p>Tag information.</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("DdosId",$param) and $param["DdosId"] !== null) {
            $this->DdosId = $param["DdosId"];
        }

        if (array_key_exists("ListenerCounts",$param) and $param["ListenerCounts"] !== null) {
            $this->ListenerCounts = $param["ListenerCounts"];
        }

        if (array_key_exists("AcceleratorAreaCounts",$param) and $param["AcceleratorAreaCounts"] !== null) {
            $this->AcceleratorAreaCounts = $param["AcceleratorAreaCounts"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("CrossBorderType",$param) and $param["CrossBorderType"] !== null) {
            $this->CrossBorderType = $param["CrossBorderType"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
