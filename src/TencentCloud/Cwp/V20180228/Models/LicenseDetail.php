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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Authorization order list object
 *
 * @method integer getLicenseId() Obtain Authorization ID
 * @method void setLicenseId(integer $LicenseId) Set Authorization ID
 * @method integer getLicenseType() Obtain Authorization type. 0: Pro Edition - pay-as-you-go; 1: Pro Edition - monthly subscription; 2: Ultimate Edition - monthly subscription.
 * @method void setLicenseType(integer $LicenseType) Set Authorization type. 0: Pro Edition - pay-as-you-go; 1: Pro Edition - monthly subscription; 2: Ultimate Edition - monthly subscription.
 * @method integer getLicenseStatus() Obtain Authorization status. 0: not in use; 1: partially in use; 2: used up; 3: unavailable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseStatus(integer $LicenseStatus) Set Authorization status. 0: not in use; 1: partially in use; 2: used up; 3: unavailable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLicenseCnt() Obtain Total number of authorizations
 * @method void setLicenseCnt(integer $LicenseCnt) Set Total number of authorizations
 * @method integer getUsedLicenseCnt() Obtain Number of used authorizations
 * @method void setUsedLicenseCnt(integer $UsedLicenseCnt) Set Number of used authorizations
 * @method integer getOrderStatus() Obtain Order status. 1: normal; 2: isolated; 3: terminated.
 * @method void setOrderStatus(integer $OrderStatus) Set Order status. 1: normal; 2: isolated; 3: terminated.
 * @method string getDeadline() Obtain Deadline
 * @method void setDeadline(string $Deadline) Set Deadline
 * @method string getResourceId() Obtain Order resource ID
 * @method void setResourceId(string $ResourceId) Set Order resource ID
 * @method integer getAutoRenewFlag() Obtain 0: initialization; 1: automatic renewal; 2: no automatic renewal.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set 0: initialization; 1: automatic renewal; 2: no automatic renewal.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getTaskId() Obtain Task ID. Default value: 0. It is used to query the binding progress.
 * @method void setTaskId(integer $TaskId) Set Task ID. Default value: 0. It is used to query the binding progress.
 * @method string getBuyTime() Obtain Time of purchase
 * @method void setBuyTime(string $BuyTime) Set Time of purchase
 * @method integer getSourceType() Obtain Whether the order is a trial order
 * @method void setSourceType(integer $SourceType) Set Whether the order is a trial order
 * @method string getAlias() Obtain Resource alias
 * @method void setAlias(string $Alias) Set Resource alias
 * @method array getTags() Obtain Platform Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Platform Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFreezeNum() Obtain Number of frozen authorizations. 0: no authorization is frozen; other values: actual number of frozen authorizations.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFreezeNum(integer $FreezeNum) Set Number of frozen authorizations. 0: no authorization is frozen; other values: actual number of frozen authorizations.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LicenseDetail extends AbstractModel
{
    /**
     * @var integer Authorization ID
     */
    public $LicenseId;

    /**
     * @var integer Authorization type. 0: Pro Edition - pay-as-you-go; 1: Pro Edition - monthly subscription; 2: Ultimate Edition - monthly subscription.
     */
    public $LicenseType;

    /**
     * @var integer Authorization status. 0: not in use; 1: partially in use; 2: used up; 3: unavailable.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseStatus;

    /**
     * @var integer Total number of authorizations
     */
    public $LicenseCnt;

    /**
     * @var integer Number of used authorizations
     */
    public $UsedLicenseCnt;

    /**
     * @var integer Order status. 1: normal; 2: isolated; 3: terminated.
     */
    public $OrderStatus;

    /**
     * @var string Deadline
     */
    public $Deadline;

    /**
     * @var string Order resource ID
     */
    public $ResourceId;

    /**
     * @var integer 0: initialization; 1: automatic renewal; 2: no automatic renewal.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Task ID. Default value: 0. It is used to query the binding progress.
     */
    public $TaskId;

    /**
     * @var string Time of purchase
     */
    public $BuyTime;

    /**
     * @var integer Whether the order is a trial order
     */
    public $SourceType;

    /**
     * @var string Resource alias
     */
    public $Alias;

    /**
     * @var array Platform Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Number of frozen authorizations. 0: no authorization is frozen; other values: actual number of frozen authorizations.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FreezeNum;

    /**
     * @param integer $LicenseId Authorization ID
     * @param integer $LicenseType Authorization type. 0: Pro Edition - pay-as-you-go; 1: Pro Edition - monthly subscription; 2: Ultimate Edition - monthly subscription.
     * @param integer $LicenseStatus Authorization status. 0: not in use; 1: partially in use; 2: used up; 3: unavailable.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LicenseCnt Total number of authorizations
     * @param integer $UsedLicenseCnt Number of used authorizations
     * @param integer $OrderStatus Order status. 1: normal; 2: isolated; 3: terminated.
     * @param string $Deadline Deadline
     * @param string $ResourceId Order resource ID
     * @param integer $AutoRenewFlag 0: initialization; 1: automatic renewal; 2: no automatic renewal.
     * @param integer $ProjectId Project ID
     * @param integer $TaskId Task ID. Default value: 0. It is used to query the binding progress.
     * @param string $BuyTime Time of purchase
     * @param integer $SourceType Whether the order is a trial order
     * @param string $Alias Resource alias
     * @param array $Tags Platform Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FreezeNum Number of frozen authorizations. 0: no authorization is frozen; other values: actual number of frozen authorizations.
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
        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("LicenseStatus",$param) and $param["LicenseStatus"] !== null) {
            $this->LicenseStatus = $param["LicenseStatus"];
        }

        if (array_key_exists("LicenseCnt",$param) and $param["LicenseCnt"] !== null) {
            $this->LicenseCnt = $param["LicenseCnt"];
        }

        if (array_key_exists("UsedLicenseCnt",$param) and $param["UsedLicenseCnt"] !== null) {
            $this->UsedLicenseCnt = $param["UsedLicenseCnt"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("FreezeNum",$param) and $param["FreezeNum"] !== null) {
            $this->FreezeNum = $param["FreezeNum"];
        }
    }
}
