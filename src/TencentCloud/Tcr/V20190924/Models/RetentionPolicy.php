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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag retention policy
 *
 * @method integer getRetentionId() Obtain Tag retention policy ID
 * @method void setRetentionId(integer $RetentionId) Set Tag retention policy ID
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 * @method array getRetentionRuleList() Obtain List of rules
 * @method void setRetentionRuleList(array $RetentionRuleList) Set List of rules
 * @method string getCronSetting() Obtain Regular execution mode
 * @method void setCronSetting(string $CronSetting) Set Regular execution mode
 * @method boolean getDisabled() Obtain Whether to enable the rule
 * @method void setDisabled(boolean $Disabled) Set Whether to enable the rule
 * @method string getNextExecutionTime() Obtain The execution time of the next task based on the current time and `cronSetting`, which is for reference only
 * @method void setNextExecutionTime(string $NextExecutionTime) Set The execution time of the next task based on the current time and `cronSetting`, which is for reference only
 */
class RetentionPolicy extends AbstractModel
{
    /**
     * @var integer Tag retention policy ID
     */
    public $RetentionId;

    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @var array List of rules
     */
    public $RetentionRuleList;

    /**
     * @var string Regular execution mode
     */
    public $CronSetting;

    /**
     * @var boolean Whether to enable the rule
     */
    public $Disabled;

    /**
     * @var string The execution time of the next task based on the current time and `cronSetting`, which is for reference only
     */
    public $NextExecutionTime;

    /**
     * @param integer $RetentionId Tag retention policy ID
     * @param string $NamespaceName Namespace name
     * @param array $RetentionRuleList List of rules
     * @param string $CronSetting Regular execution mode
     * @param boolean $Disabled Whether to enable the rule
     * @param string $NextExecutionTime The execution time of the next task based on the current time and `cronSetting`, which is for reference only
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
        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("RetentionRuleList",$param) and $param["RetentionRuleList"] !== null) {
            $this->RetentionRuleList = [];
            foreach ($param["RetentionRuleList"] as $key => $value){
                $obj = new RetentionRule();
                $obj->deserialize($value);
                array_push($this->RetentionRuleList, $obj);
            }
        }

        if (array_key_exists("CronSetting",$param) and $param["CronSetting"] !== null) {
            $this->CronSetting = $param["CronSetting"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("NextExecutionTime",$param) and $param["NextExecutionTime"] !== null) {
            $this->NextExecutionTime = $param["NextExecutionTime"];
        }
    }
}
