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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulLevelImageSummary response structure.
 *
 * @method float getHighLevelVulLocalImagePercent() Obtain Percentage of high-risk vulnerabilities in the latest local images
 * @method void setHighLevelVulLocalImagePercent(float $HighLevelVulLocalImagePercent) Set Percentage of high-risk vulnerabilities in the latest local images
 * @method float getMediumLevelVulLocalImagePercent() Obtain Percentage of medium-risk vulnerabilities in the latest local images
 * @method void setMediumLevelVulLocalImagePercent(float $MediumLevelVulLocalImagePercent) Set Percentage of medium-risk vulnerabilities in the latest local images
 * @method float getLowLevelVulLocalImagePercent() Obtain Percentage of low-risk vulnerabilities in the latest local images
 * @method void setLowLevelVulLocalImagePercent(float $LowLevelVulLocalImagePercent) Set Percentage of low-risk vulnerabilities in the latest local images
 * @method float getCriticalLevelVulLocalImagePercent() Obtain Percentage of critical vulnerabilities in the latest local images
 * @method void setCriticalLevelVulLocalImagePercent(float $CriticalLevelVulLocalImagePercent) Set Percentage of critical vulnerabilities in the latest local images
 * @method integer getLocalNewestImageCount() Obtain Number of affected local images on the latest version
 * @method void setLocalNewestImageCount(integer $LocalNewestImageCount) Set Number of affected local images on the latest version
 * @method integer getRegistryNewestImageCount() Obtain Number of affected repository images on the latest version
 * @method void setRegistryNewestImageCount(integer $RegistryNewestImageCount) Set Number of affected repository images on the latest version
 * @method float getHighLevelVulRegistryImagePercent() Obtain Percentage of high-risk vulnerabilities in the latest repository image
 * @method void setHighLevelVulRegistryImagePercent(float $HighLevelVulRegistryImagePercent) Set Percentage of high-risk vulnerabilities in the latest repository image
 * @method float getMediumLevelVulRegistryImagePercent() Obtain Percentage of medium-risk vulnerabilities in the latest repository image
 * @method void setMediumLevelVulRegistryImagePercent(float $MediumLevelVulRegistryImagePercent) Set Percentage of medium-risk vulnerabilities in the latest repository image
 * @method float getLowLevelVulRegistryImagePercent() Obtain Percentage of low-risk vulnerabilities in the latest repository image
 * @method void setLowLevelVulRegistryImagePercent(float $LowLevelVulRegistryImagePercent) Set Percentage of low-risk vulnerabilities in the latest repository image
 * @method float getCriticalLevelVulRegistryImagePercent() Obtain Percentage of critical vulnerabilities in the latest repository image
 * @method void setCriticalLevelVulRegistryImagePercent(float $CriticalLevelVulRegistryImagePercent) Set Percentage of critical vulnerabilities in the latest repository image
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVulLevelImageSummaryResponse extends AbstractModel
{
    /**
     * @var float Percentage of high-risk vulnerabilities in the latest local images
     */
    public $HighLevelVulLocalImagePercent;

    /**
     * @var float Percentage of medium-risk vulnerabilities in the latest local images
     */
    public $MediumLevelVulLocalImagePercent;

    /**
     * @var float Percentage of low-risk vulnerabilities in the latest local images
     */
    public $LowLevelVulLocalImagePercent;

    /**
     * @var float Percentage of critical vulnerabilities in the latest local images
     */
    public $CriticalLevelVulLocalImagePercent;

    /**
     * @var integer Number of affected local images on the latest version
     */
    public $LocalNewestImageCount;

    /**
     * @var integer Number of affected repository images on the latest version
     */
    public $RegistryNewestImageCount;

    /**
     * @var float Percentage of high-risk vulnerabilities in the latest repository image
     */
    public $HighLevelVulRegistryImagePercent;

    /**
     * @var float Percentage of medium-risk vulnerabilities in the latest repository image
     */
    public $MediumLevelVulRegistryImagePercent;

    /**
     * @var float Percentage of low-risk vulnerabilities in the latest repository image
     */
    public $LowLevelVulRegistryImagePercent;

    /**
     * @var float Percentage of critical vulnerabilities in the latest repository image
     */
    public $CriticalLevelVulRegistryImagePercent;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $HighLevelVulLocalImagePercent Percentage of high-risk vulnerabilities in the latest local images
     * @param float $MediumLevelVulLocalImagePercent Percentage of medium-risk vulnerabilities in the latest local images
     * @param float $LowLevelVulLocalImagePercent Percentage of low-risk vulnerabilities in the latest local images
     * @param float $CriticalLevelVulLocalImagePercent Percentage of critical vulnerabilities in the latest local images
     * @param integer $LocalNewestImageCount Number of affected local images on the latest version
     * @param integer $RegistryNewestImageCount Number of affected repository images on the latest version
     * @param float $HighLevelVulRegistryImagePercent Percentage of high-risk vulnerabilities in the latest repository image
     * @param float $MediumLevelVulRegistryImagePercent Percentage of medium-risk vulnerabilities in the latest repository image
     * @param float $LowLevelVulRegistryImagePercent Percentage of low-risk vulnerabilities in the latest repository image
     * @param float $CriticalLevelVulRegistryImagePercent Percentage of critical vulnerabilities in the latest repository image
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("HighLevelVulLocalImagePercent",$param) and $param["HighLevelVulLocalImagePercent"] !== null) {
            $this->HighLevelVulLocalImagePercent = $param["HighLevelVulLocalImagePercent"];
        }

        if (array_key_exists("MediumLevelVulLocalImagePercent",$param) and $param["MediumLevelVulLocalImagePercent"] !== null) {
            $this->MediumLevelVulLocalImagePercent = $param["MediumLevelVulLocalImagePercent"];
        }

        if (array_key_exists("LowLevelVulLocalImagePercent",$param) and $param["LowLevelVulLocalImagePercent"] !== null) {
            $this->LowLevelVulLocalImagePercent = $param["LowLevelVulLocalImagePercent"];
        }

        if (array_key_exists("CriticalLevelVulLocalImagePercent",$param) and $param["CriticalLevelVulLocalImagePercent"] !== null) {
            $this->CriticalLevelVulLocalImagePercent = $param["CriticalLevelVulLocalImagePercent"];
        }

        if (array_key_exists("LocalNewestImageCount",$param) and $param["LocalNewestImageCount"] !== null) {
            $this->LocalNewestImageCount = $param["LocalNewestImageCount"];
        }

        if (array_key_exists("RegistryNewestImageCount",$param) and $param["RegistryNewestImageCount"] !== null) {
            $this->RegistryNewestImageCount = $param["RegistryNewestImageCount"];
        }

        if (array_key_exists("HighLevelVulRegistryImagePercent",$param) and $param["HighLevelVulRegistryImagePercent"] !== null) {
            $this->HighLevelVulRegistryImagePercent = $param["HighLevelVulRegistryImagePercent"];
        }

        if (array_key_exists("MediumLevelVulRegistryImagePercent",$param) and $param["MediumLevelVulRegistryImagePercent"] !== null) {
            $this->MediumLevelVulRegistryImagePercent = $param["MediumLevelVulRegistryImagePercent"];
        }

        if (array_key_exists("LowLevelVulRegistryImagePercent",$param) and $param["LowLevelVulRegistryImagePercent"] !== null) {
            $this->LowLevelVulRegistryImagePercent = $param["LowLevelVulRegistryImagePercent"];
        }

        if (array_key_exists("CriticalLevelVulRegistryImagePercent",$param) and $param["CriticalLevelVulRegistryImagePercent"] !== null) {
            $this->CriticalLevelVulRegistryImagePercent = $param["CriticalLevelVulRegistryImagePercent"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
