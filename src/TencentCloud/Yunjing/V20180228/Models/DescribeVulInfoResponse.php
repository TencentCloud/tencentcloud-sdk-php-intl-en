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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulInfo response structure.
 *
 * @method integer getVulId() Obtain Vulnerability category ID.
 * @method void setVulId(integer $VulId) Set Vulnerability category ID.
 * @method string getVulName() Obtain Vulnerability name.
 * @method void setVulName(string $VulName) Set Vulnerability name.
 * @method string getVulLevel() Obtain Vulnerability level.
 * @method void setVulLevel(string $VulLevel) Set Vulnerability level.
 * @method string getVulType() Obtain Vulnerability type.
 * @method void setVulType(string $VulType) Set Vulnerability type.
 * @method string getDescription() Obtain Vulnerability description.
 * @method void setDescription(string $Description) Set Vulnerability description.
 * @method string getRepairPlan() Obtain Repair plan.
 * @method void setRepairPlan(string $RepairPlan) Set Repair plan.
 * @method string getCveId() Obtain Vulnerability CVE.
 * @method void setCveId(string $CveId) Set Vulnerability CVE.
 * @method string getReference() Obtain Reference link.
 * @method void setReference(string $Reference) Set Reference link.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVulInfoResponse extends AbstractModel
{
    /**
     * @var integer Vulnerability category ID.
     */
    public $VulId;

    /**
     * @var string Vulnerability name.
     */
    public $VulName;

    /**
     * @var string Vulnerability level.
     */
    public $VulLevel;

    /**
     * @var string Vulnerability type.
     */
    public $VulType;

    /**
     * @var string Vulnerability description.
     */
    public $Description;

    /**
     * @var string Repair plan.
     */
    public $RepairPlan;

    /**
     * @var string Vulnerability CVE.
     */
    public $CveId;

    /**
     * @var string Reference link.
     */
    public $Reference;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $VulId Vulnerability category ID.
     * @param string $VulName Vulnerability name.
     * @param string $VulLevel Vulnerability level.
     * @param string $VulType Vulnerability type.
     * @param string $Description Vulnerability description.
     * @param string $RepairPlan Repair plan.
     * @param string $CveId Vulnerability CVE.
     * @param string $Reference Reference link.
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RepairPlan",$param) and $param["RepairPlan"] !== null) {
            $this->RepairPlan = $param["RepairPlan"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
