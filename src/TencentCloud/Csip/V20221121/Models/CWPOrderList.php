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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Order list object members.
 *
 * @method string getProductCode() Obtain <p>Associated product p_</p>
 * @method void setProductCode(string $ProductCode) Set <p>Associated product p_</p>
 * @method string getSubProductCode() Obtain <p>Subproduct sp_</p>
 * @method void setSubProductCode(string $SubProductCode) Set <p>Subproduct sp_</p>
 * @method string getInquireKey() Obtain <p>Billing item Layer-4 sv_</p>
 * @method void setInquireKey(string $InquireKey) Set <p>Billing item Layer-4 sv_</p>
 * @method integer getInquireNum() Obtain <p>Resource purchase quantity</p>
 * @method void setInquireNum(integer $InquireNum) Set <p>Resource purchase quantity</p>
 * @method integer getUsedNum() Obtain <p>Resource usage</p>
 * @method void setUsedNum(integer $UsedNum) Set <p>Resource usage</p>
 * @method array getTagList() Obtain <p>Cloud tag</p>
 * @method void setTagList(array $TagList) Set <p>Cloud tag</p>
 * @method integer getStatus() Obtain <p>Order status: 1 normal, 2 isolated, 3 terminated</p>
 * @method void setStatus(integer $Status) Set <p>Order status: 1 normal, 2 isolated, 3 terminated</p>
 * @method string getBeginTime() Obtain <p>Order start time</p>
 * @method void setBeginTime(string $BeginTime) Set <p>Order start time</p>
 * @method string getEndTime() Obtain <p>Order end time</p>
 * @method void setEndTime(string $EndTime) Set <p>Order end time</p>
 * @method integer getProjectID() Obtain <p>Project ID.</p>
 * @method void setProjectID(integer $ProjectID) Set <p>Project ID.</p>
 * @method string getAlias() Obtain <p>Resource alias</p>
 * @method void setAlias(string $Alias) Set <p>Resource alias</p>
 * @method string getResourceId() Obtain <p>Resource ID</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource ID</p>
 * @method integer getAutoRenewFlag() Obtain <p>Auto-renewal label 0: no automatic renewal by default (key accounts renew automatically). 1: auto-renewal. 2: manually set not to automatically renew (key accounts do not renew automatically).</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Auto-renewal label 0: no automatic renewal by default (key accounts renew automatically). 1: auto-renewal. 2: manually set not to automatically renew (key accounts do not renew automatically).</p>
 * @method integer getSourceType() Obtain <p>Resource type.</p>
 * @method void setSourceType(integer $SourceType) Set <p>Resource type.</p>
 * @method integer getPayMode() Obtain <p>Billing mode. 0: postpaid. 1: prepaid (annual/monthly subscription)</p>
 * @method void setPayMode(integer $PayMode) Set <p>Billing mode. 0: postpaid. 1: prepaid (annual/monthly subscription)</p>
 * @method integer getRegionID() Obtain <p>Region ID.</p>
 * @method void setRegionID(integer $RegionID) Set <p>Region ID.</p>
 * @method integer getZoneID() Obtain <p>AZ ID.</p>
 * @method void setZoneID(integer $ZoneID) Set <p>AZ ID.</p>
 * @method string getDealName() Obtain <p>Current sub-order number</p>
 * @method void setDealName(string $DealName) Set <p>Current sub-order number</p>
 * @method CWPOrderExtraParam getExtraParam() Obtain <p>Additional parameters for orders</p>
 * @method void setExtraParam(CWPOrderExtraParam $ExtraParam) Set <p>Additional parameters for orders</p>
 */
class CWPOrderList extends AbstractModel
{
    /**
     * @var string <p>Associated product p_</p>
     */
    public $ProductCode;

    /**
     * @var string <p>Subproduct sp_</p>
     */
    public $SubProductCode;

    /**
     * @var string <p>Billing item Layer-4 sv_</p>
     */
    public $InquireKey;

    /**
     * @var integer <p>Resource purchase quantity</p>
     */
    public $InquireNum;

    /**
     * @var integer <p>Resource usage</p>
     */
    public $UsedNum;

    /**
     * @var array <p>Cloud tag</p>
     */
    public $TagList;

    /**
     * @var integer <p>Order status: 1 normal, 2 isolated, 3 terminated</p>
     */
    public $Status;

    /**
     * @var string <p>Order start time</p>
     */
    public $BeginTime;

    /**
     * @var string <p>Order end time</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Project ID.</p>
     */
    public $ProjectID;

    /**
     * @var string <p>Resource alias</p>
     */
    public $Alias;

    /**
     * @var string <p>Resource ID</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>Auto-renewal label 0: no automatic renewal by default (key accounts renew automatically). 1: auto-renewal. 2: manually set not to automatically renew (key accounts do not renew automatically).</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>Resource type.</p>
     */
    public $SourceType;

    /**
     * @var integer <p>Billing mode. 0: postpaid. 1: prepaid (annual/monthly subscription)</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Region ID.</p>
     */
    public $RegionID;

    /**
     * @var integer <p>AZ ID.</p>
     */
    public $ZoneID;

    /**
     * @var string <p>Current sub-order number</p>
     */
    public $DealName;

    /**
     * @var CWPOrderExtraParam <p>Additional parameters for orders</p>
     */
    public $ExtraParam;

    /**
     * @param string $ProductCode <p>Associated product p_</p>
     * @param string $SubProductCode <p>Subproduct sp_</p>
     * @param string $InquireKey <p>Billing item Layer-4 sv_</p>
     * @param integer $InquireNum <p>Resource purchase quantity</p>
     * @param integer $UsedNum <p>Resource usage</p>
     * @param array $TagList <p>Cloud tag</p>
     * @param integer $Status <p>Order status: 1 normal, 2 isolated, 3 terminated</p>
     * @param string $BeginTime <p>Order start time</p>
     * @param string $EndTime <p>Order end time</p>
     * @param integer $ProjectID <p>Project ID.</p>
     * @param string $Alias <p>Resource alias</p>
     * @param string $ResourceId <p>Resource ID</p>
     * @param integer $AutoRenewFlag <p>Auto-renewal label 0: no automatic renewal by default (key accounts renew automatically). 1: auto-renewal. 2: manually set not to automatically renew (key accounts do not renew automatically).</p>
     * @param integer $SourceType <p>Resource type.</p>
     * @param integer $PayMode <p>Billing mode. 0: postpaid. 1: prepaid (annual/monthly subscription)</p>
     * @param integer $RegionID <p>Region ID.</p>
     * @param integer $ZoneID <p>AZ ID.</p>
     * @param string $DealName <p>Current sub-order number</p>
     * @param CWPOrderExtraParam $ExtraParam <p>Additional parameters for orders</p>
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
        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }

        if (array_key_exists("ZoneID",$param) and $param["ZoneID"] !== null) {
            $this->ZoneID = $param["ZoneID"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = new CWPOrderExtraParam();
            $this->ExtraParam->deserialize($param["ExtraParam"]);
        }
    }
}
