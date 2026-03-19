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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Queries the list of SCPs associated with the target.
 *
 * @method integer getStrategyId() Obtain Policy ID
 * @method void setStrategyId(integer $StrategyId) Set Policy ID
 * @method string getStrategyName() Obtain Policy name.
 * @method void setStrategyName(string $StrategyName) Set Policy name.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getUin() Obtain Associated account or node.
 * @method void setUin(integer $Uin) Set Associated account or node.
 * @method integer getType() Obtain Association type. 1: node association; 2: user association.
 * @method void setType(integer $Type) Set Association type. 1: node association; 2: user association.
 * @method string getAddTime() Obtain Policy creation time.
 * @method void setAddTime(string $AddTime) Set Policy creation time.
 * @method string getUpdateTime() Obtain Policy update time.
 * @method void setUpdateTime(string $UpdateTime) Set Policy update time.
 * @method string getName() Obtain Department name.
 * @method void setName(string $Name) Set Department name.
 * @method string getAttachTime() Obtain Policy binding time.
 * @method void setAttachTime(string $AttachTime) Set Policy binding time.
 */
class ListPoliciesForTarget extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $StrategyId;

    /**
     * @var string Policy name.
     */
    public $StrategyName;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Associated account or node.
     */
    public $Uin;

    /**
     * @var integer Association type. 1: node association; 2: user association.
     */
    public $Type;

    /**
     * @var string Policy creation time.
     */
    public $AddTime;

    /**
     * @var string Policy update time.
     */
    public $UpdateTime;

    /**
     * @var string Department name.
     */
    public $Name;

    /**
     * @var string Policy binding time.
     */
    public $AttachTime;

    /**
     * @param integer $StrategyId Policy ID
     * @param string $StrategyName Policy name.
     * @param string $Remark Remarks
     * @param integer $Uin Associated account or node.
     * @param integer $Type Association type. 1: node association; 2: user association.
     * @param string $AddTime Policy creation time.
     * @param string $UpdateTime Policy update time.
     * @param string $Name Department name.
     * @param string $AttachTime Policy binding time.
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AttachTime",$param) and $param["AttachTime"] !== null) {
            $this->AttachTime = $param["AttachTime"];
        }
    }
}
