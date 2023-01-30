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
 * DescribeVirusAutoIsolateSampleDetail response structure.
 *
 * @method string getMD5() Obtain MD5 checksum of the file
 * @method void setMD5(string $MD5) Set MD5 checksum of the file
 * @method integer getSize() Obtain File size (B)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSize(integer $Size) Set File size (B)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVirusName() Obtain Virus name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirusName(string $VirusName) Set Virus name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiskLevel() Obtain Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskLevel(string $RiskLevel) Set Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getKillEngine() Obtain Anti-virus engine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKillEngine(array $KillEngine) Set Anti-virus engine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHarmDescribe() Obtain Event description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHarmDescribe(string $HarmDescribe) Set Event description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestScheme() Obtain Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuggestScheme(string $SuggestScheme) Set Solution
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReferenceLink() Obtain Reference link
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReferenceLink(string $ReferenceLink) Set Reference link
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVirusAutoIsolateSampleDetailResponse extends AbstractModel
{
    /**
     * @var string MD5 checksum of the file
     */
    public $MD5;

    /**
     * @var integer File size (B)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Size;

    /**
     * @var string Virus name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirusName;

    /**
     * @var string Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskLevel;

    /**
     * @var array Anti-virus engine
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KillEngine;

    /**
     * @var array Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Event description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HarmDescribe;

    /**
     * @var string Solution
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuggestScheme;

    /**
     * @var string Reference link
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReferenceLink;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $MD5 MD5 checksum of the file
     * @param integer $Size File size (B)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VirusName Virus name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiskLevel Risk level. Valid values: `RISK_CRITICAL`, `RISK_HIGH`, `RISK_MEDIUM`, `RISK_LOW`, `RISK_NOTICE`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $KillEngine Anti-virus engine
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HarmDescribe Event description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SuggestScheme Solution
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReferenceLink Reference link
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("KillEngine",$param) and $param["KillEngine"] !== null) {
            $this->KillEngine = $param["KillEngine"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("HarmDescribe",$param) and $param["HarmDescribe"] !== null) {
            $this->HarmDescribe = $param["HarmDescribe"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("ReferenceLink",$param) and $param["ReferenceLink"] !== null) {
            $this->ReferenceLink = $param["ReferenceLink"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
