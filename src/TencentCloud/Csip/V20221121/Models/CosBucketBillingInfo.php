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
 * Number of Buckets
 *
 * @method integer getAppId() Obtain <p>appid</p>
 * @method void setAppId(integer $AppId) Set <p>appid</p>
 * @method string getOwnerUin() Obtain <p>uin</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>uin</p>
 * @method string getOwnerNickName() Obtain <p>Nickname</p>
 * @method void setOwnerNickName(string $OwnerNickName) Set <p>Nickname</p>
 * @method integer getBucketCount() Obtain <p>Number of buckets</p>
 * @method void setBucketCount(integer $BucketCount) Set <p>Number of buckets</p>
 * @method integer getBuyStatus() Obtain <p>0 Not purchased 1 Purchased separately 2 Shared</p>
 * @method void setBuyStatus(integer $BuyStatus) Set <p>0 Not purchased 1 Purchased separately 2 Shared</p>
 * @method integer getShareFromAppId() Obtain <p>Shared account appid.</p>
 * @method void setShareFromAppId(integer $ShareFromAppId) Set <p>Shared account appid.</p>
 * @method string getShareFromUin() Obtain <p>uin of the shared account</p>
 * @method void setShareFromUin(string $ShareFromUin) Set <p>uin of the shared account</p>
 * @method string getShareFromNickName() Obtain <p>Shared account nickname</p>
 * @method void setShareFromNickName(string $ShareFromNickName) Set <p>Shared account nickname</p>
 * @method integer getMonitorBucketCount() Obtain <p>Number of monitored buckets</p>
 * @method void setMonitorBucketCount(integer $MonitorBucketCount) Set <p>Number of monitored buckets</p>
 * @method integer getIsAutoMonitor() Obtain <p>0: disable; 1: enable</p>
 * @method void setIsAutoMonitor(integer $IsAutoMonitor) Set <p>0: disable; 1: enable</p>
 * @method boolean getLogFeatureWhitelist() Obtain <p>Whether to enable the allowlist log feature</p>
 * @method void setLogFeatureWhitelist(boolean $LogFeatureWhitelist) Set <p>Whether to enable the allowlist log feature</p>
 * @method boolean getIsHaveNewPostOrder() Obtain <p>Existence of new postpaid orders</p>
 * @method void setIsHaveNewPostOrder(boolean $IsHaveNewPostOrder) Set <p>Existence of new postpaid orders</p>
 * @method boolean getIsHaveOldPostOrder() Obtain <p>Existence of legacy postpaid orders</p>
 * @method void setIsHaveOldPostOrder(boolean $IsHaveOldPostOrder) Set <p>Existence of legacy postpaid orders</p>
 * @method array getPostProductList() Obtain <p>Postpaid Product List</p>
 * @method void setPostProductList(array $PostProductList) Set <p>Postpaid Product List</p>
 * @method float getDefaultSampleRate() Obtain <p>Default sampling rate for newly-added buckets under this AppId, unit: ratio from 0 to 1</p><p>Value range: [0.001, 1]</p>
 * @method void setDefaultSampleRate(float $DefaultSampleRate) Set <p>Default sampling rate for newly-added buckets under this AppId, unit: ratio from 0 to 1</p><p>Value range: [0.001, 1]</p>
 * @method boolean getBucketSamplingRateWhitelist() Obtain <p>Whether it is a whitelist, used only to control the frontend range and accuracy</p>
 * @method void setBucketSamplingRateWhitelist(boolean $BucketSamplingRateWhitelist) Set <p>Whether it is a whitelist, used only to control the frontend range and accuracy</p>
 */
class CosBucketBillingInfo extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>uin</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>Nickname</p>
     */
    public $OwnerNickName;

    /**
     * @var integer <p>Number of buckets</p>
     */
    public $BucketCount;

    /**
     * @var integer <p>0 Not purchased 1 Purchased separately 2 Shared</p>
     */
    public $BuyStatus;

    /**
     * @var integer <p>Shared account appid.</p>
     */
    public $ShareFromAppId;

    /**
     * @var string <p>uin of the shared account</p>
     */
    public $ShareFromUin;

    /**
     * @var string <p>Shared account nickname</p>
     */
    public $ShareFromNickName;

    /**
     * @var integer <p>Number of monitored buckets</p>
     */
    public $MonitorBucketCount;

    /**
     * @var integer <p>0: disable; 1: enable</p>
     */
    public $IsAutoMonitor;

    /**
     * @var boolean <p>Whether to enable the allowlist log feature</p>
     */
    public $LogFeatureWhitelist;

    /**
     * @var boolean <p>Existence of new postpaid orders</p>
     */
    public $IsHaveNewPostOrder;

    /**
     * @var boolean <p>Existence of legacy postpaid orders</p>
     */
    public $IsHaveOldPostOrder;

    /**
     * @var array <p>Postpaid Product List</p>
     */
    public $PostProductList;

    /**
     * @var float <p>Default sampling rate for newly-added buckets under this AppId, unit: ratio from 0 to 1</p><p>Value range: [0.001, 1]</p>
     */
    public $DefaultSampleRate;

    /**
     * @var boolean <p>Whether it is a whitelist, used only to control the frontend range and accuracy</p>
     */
    public $BucketSamplingRateWhitelist;

    /**
     * @param integer $AppId <p>appid</p>
     * @param string $OwnerUin <p>uin</p>
     * @param string $OwnerNickName <p>Nickname</p>
     * @param integer $BucketCount <p>Number of buckets</p>
     * @param integer $BuyStatus <p>0 Not purchased 1 Purchased separately 2 Shared</p>
     * @param integer $ShareFromAppId <p>Shared account appid.</p>
     * @param string $ShareFromUin <p>uin of the shared account</p>
     * @param string $ShareFromNickName <p>Shared account nickname</p>
     * @param integer $MonitorBucketCount <p>Number of monitored buckets</p>
     * @param integer $IsAutoMonitor <p>0: disable; 1: enable</p>
     * @param boolean $LogFeatureWhitelist <p>Whether to enable the allowlist log feature</p>
     * @param boolean $IsHaveNewPostOrder <p>Existence of new postpaid orders</p>
     * @param boolean $IsHaveOldPostOrder <p>Existence of legacy postpaid orders</p>
     * @param array $PostProductList <p>Postpaid Product List</p>
     * @param float $DefaultSampleRate <p>Default sampling rate for newly-added buckets under this AppId, unit: ratio from 0 to 1</p><p>Value range: [0.001, 1]</p>
     * @param boolean $BucketSamplingRateWhitelist <p>Whether it is a whitelist, used only to control the frontend range and accuracy</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerNickName",$param) and $param["OwnerNickName"] !== null) {
            $this->OwnerNickName = $param["OwnerNickName"];
        }

        if (array_key_exists("BucketCount",$param) and $param["BucketCount"] !== null) {
            $this->BucketCount = $param["BucketCount"];
        }

        if (array_key_exists("BuyStatus",$param) and $param["BuyStatus"] !== null) {
            $this->BuyStatus = $param["BuyStatus"];
        }

        if (array_key_exists("ShareFromAppId",$param) and $param["ShareFromAppId"] !== null) {
            $this->ShareFromAppId = $param["ShareFromAppId"];
        }

        if (array_key_exists("ShareFromUin",$param) and $param["ShareFromUin"] !== null) {
            $this->ShareFromUin = $param["ShareFromUin"];
        }

        if (array_key_exists("ShareFromNickName",$param) and $param["ShareFromNickName"] !== null) {
            $this->ShareFromNickName = $param["ShareFromNickName"];
        }

        if (array_key_exists("MonitorBucketCount",$param) and $param["MonitorBucketCount"] !== null) {
            $this->MonitorBucketCount = $param["MonitorBucketCount"];
        }

        if (array_key_exists("IsAutoMonitor",$param) and $param["IsAutoMonitor"] !== null) {
            $this->IsAutoMonitor = $param["IsAutoMonitor"];
        }

        if (array_key_exists("LogFeatureWhitelist",$param) and $param["LogFeatureWhitelist"] !== null) {
            $this->LogFeatureWhitelist = $param["LogFeatureWhitelist"];
        }

        if (array_key_exists("IsHaveNewPostOrder",$param) and $param["IsHaveNewPostOrder"] !== null) {
            $this->IsHaveNewPostOrder = $param["IsHaveNewPostOrder"];
        }

        if (array_key_exists("IsHaveOldPostOrder",$param) and $param["IsHaveOldPostOrder"] !== null) {
            $this->IsHaveOldPostOrder = $param["IsHaveOldPostOrder"];
        }

        if (array_key_exists("PostProductList",$param) and $param["PostProductList"] !== null) {
            $this->PostProductList = $param["PostProductList"];
        }

        if (array_key_exists("DefaultSampleRate",$param) and $param["DefaultSampleRate"] !== null) {
            $this->DefaultSampleRate = $param["DefaultSampleRate"];
        }

        if (array_key_exists("BucketSamplingRateWhitelist",$param) and $param["BucketSamplingRateWhitelist"] !== null) {
            $this->BucketSamplingRateWhitelist = $param["BucketSamplingRateWhitelist"];
        }
    }
}
