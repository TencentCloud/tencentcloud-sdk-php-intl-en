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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scaling rule
 *
 * @method integer getMinReplicas() Obtain Minimum number of instances in a scaling group
 * @method void setMinReplicas(integer $MinReplicas) Set Minimum number of instances in a scaling group
 * @method integer getMaxReplicas() Obtain Maximum number of instances in a scaling group
 * @method void setMaxReplicas(integer $MaxReplicas) Set Maximum number of instances in a scaling group
 * @method array getHorizontalAutoscaler() Obtain Policy of the scaling rule
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setHorizontalAutoscaler(array $HorizontalAutoscaler) Set Policy of the scaling rule
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getCronHorizontalAutoscaler() Obtain Scheduled auto-scaler policy
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCronHorizontalAutoscaler(array $CronHorizontalAutoscaler) Set Scheduled auto-scaler policy
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getAutoscalerId() Obtain Scaling rule ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAutoscalerId(string $AutoscalerId) Set Scaling rule ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getAutoscalerName() Obtain Scaling rule name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAutoscalerName(string $AutoscalerName) Set Scaling rule name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description of the scaling rule
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description of the scaling rule
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateDate() Obtain Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateDate(string $CreateDate) Set Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getModifyDate() Obtain Modification time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setModifyDate(string $ModifyDate) Set Modification time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getEnableDate() Obtain Start Time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnableDate(string $EnableDate) Set Start Time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getEnabled() Obtain Whether it is enabled
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnabled(boolean $Enabled) Set Whether it is enabled
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class Autoscaler extends AbstractModel
{
    /**
     * @var integer Minimum number of instances in a scaling group
     */
    public $MinReplicas;

    /**
     * @var integer Maximum number of instances in a scaling group
     */
    public $MaxReplicas;

    /**
     * @var array Policy of the scaling rule
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $HorizontalAutoscaler;

    /**
     * @var array Scheduled auto-scaler policy
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CronHorizontalAutoscaler;

    /**
     * @var string Scaling rule ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AutoscalerId;

    /**
     * @var string Scaling rule name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AutoscalerName;

    /**
     * @var string Description of the scaling rule
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateDate;

    /**
     * @var string Modification time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ModifyDate;

    /**
     * @var string Start Time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnableDate;

    /**
     * @var boolean Whether it is enabled
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Enabled;

    /**
     * @param integer $MinReplicas Minimum number of instances in a scaling group
     * @param integer $MaxReplicas Maximum number of instances in a scaling group
     * @param array $HorizontalAutoscaler Policy of the scaling rule
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $CronHorizontalAutoscaler Scheduled auto-scaler policy
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $AutoscalerId Scaling rule ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $AutoscalerName Scaling rule name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Description Description of the scaling rule
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateDate Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ModifyDate Modification time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $EnableDate Start Time
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Enabled Whether it is enabled
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("HorizontalAutoscaler",$param) and $param["HorizontalAutoscaler"] !== null) {
            $this->HorizontalAutoscaler = [];
            foreach ($param["HorizontalAutoscaler"] as $key => $value){
                $obj = new HorizontalAutoscaler();
                $obj->deserialize($value);
                array_push($this->HorizontalAutoscaler, $obj);
            }
        }

        if (array_key_exists("CronHorizontalAutoscaler",$param) and $param["CronHorizontalAutoscaler"] !== null) {
            $this->CronHorizontalAutoscaler = [];
            foreach ($param["CronHorizontalAutoscaler"] as $key => $value){
                $obj = new CronHorizontalAutoscaler();
                $obj->deserialize($value);
                array_push($this->CronHorizontalAutoscaler, $obj);
            }
        }

        if (array_key_exists("AutoscalerId",$param) and $param["AutoscalerId"] !== null) {
            $this->AutoscalerId = $param["AutoscalerId"];
        }

        if (array_key_exists("AutoscalerName",$param) and $param["AutoscalerName"] !== null) {
            $this->AutoscalerName = $param["AutoscalerName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("EnableDate",$param) and $param["EnableDate"] !== null) {
            $this->EnableDate = $param["EnableDate"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
