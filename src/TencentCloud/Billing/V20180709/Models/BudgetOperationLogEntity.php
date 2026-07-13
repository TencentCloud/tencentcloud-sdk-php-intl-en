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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Budget modification record info
 *
 * @method integer getPayerUin() Obtain Payer Uin
 * @method void setPayerUin(integer $PayerUin) Set Payer Uin
 * @method integer getOwnerUin() Obtain User Uin

 * @method void setOwnerUin(integer $OwnerUin) Set User Uin

 * @method integer getOperateUin() Obtain Operation user Uin
 * @method void setOperateUin(integer $OperateUin) Set Operation user Uin
 * @method integer getBillDay() Obtain Date
 * @method void setBillDay(integer $BillDay) Set Date
 * @method string getBillMonth() Obtain month
 * @method void setBillMonth(string $BillMonth) Set month
 * @method string getAction() Obtain Modify type: ADD (add new), UPDATE (update), DELETE (delete)
 * @method void setAction(string $Action) Set Modify type: ADD (add new), UPDATE (update), DELETE (delete)
 * @method array getDiffValue() Obtain modification information
 * @method void setDiffValue(array $DiffValue) Set modification information
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Modification time.
 * @method void setUpdateTime(string $UpdateTime) Set Modification time.
 * @method string getOperationChannel() Obtain Modify channel: CONSOLE/API
 * @method void setOperationChannel(string $OperationChannel) Set Modify channel: CONSOLE/API
 * @method string getBudgetId() Obtain Budget project id
 * @method void setBudgetId(string $BudgetId) Set Budget project id
 */
class BudgetOperationLogEntity extends AbstractModel
{
    /**
     * @var integer Payer Uin
     */
    public $PayerUin;

    /**
     * @var integer User Uin

     */
    public $OwnerUin;

    /**
     * @var integer Operation user Uin
     */
    public $OperateUin;

    /**
     * @var integer Date
     */
    public $BillDay;

    /**
     * @var string month
     */
    public $BillMonth;

    /**
     * @var string Modify type: ADD (add new), UPDATE (update), DELETE (delete)
     */
    public $Action;

    /**
     * @var array modification information
     */
    public $DiffValue;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Modification time.
     */
    public $UpdateTime;

    /**
     * @var string Modify channel: CONSOLE/API
     */
    public $OperationChannel;

    /**
     * @var string Budget project id
     */
    public $BudgetId;

    /**
     * @param integer $PayerUin Payer Uin
     * @param integer $OwnerUin User Uin

     * @param integer $OperateUin Operation user Uin
     * @param integer $BillDay Date
     * @param string $BillMonth month
     * @param string $Action Modify type: ADD (add new), UPDATE (update), DELETE (delete)
     * @param array $DiffValue modification information
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Modification time.
     * @param string $OperationChannel Modify channel: CONSOLE/API
     * @param string $BudgetId Budget project id
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
        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("BillDay",$param) and $param["BillDay"] !== null) {
            $this->BillDay = $param["BillDay"];
        }

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("DiffValue",$param) and $param["DiffValue"] !== null) {
            $this->DiffValue = [];
            foreach ($param["DiffValue"] as $key => $value){
                $obj = new BudgetInfoDiffEntity();
                $obj->deserialize($value);
                array_push($this->DiffValue, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperationChannel",$param) and $param["OperationChannel"] !== null) {
            $this->OperationChannel = $param["OperationChannel"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }
    }
}
