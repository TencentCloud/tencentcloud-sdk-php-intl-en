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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * <p>Model status</p>
 *
 * @method integer getConcurrency() Obtain <p>Number of exclusive concurrencies</p>
 * @method void setConcurrency(integer $Concurrency) Set <p>Number of exclusive concurrencies</p>
 * @method boolean getIsExclusive() Obtain <p>Whether it is exclusive concurrency</p>
 * @method void setIsExclusive(boolean $IsExclusive) Set <p>Whether it is exclusive concurrency</p>
 * @method boolean getIsExperienceSupported() Obtain <p>Whether direct experience in the intelligent workbench is supported (model plaza details page: dynamically determined based on space_id; when false, the frontend disables the "experience now" button)</p>
 * @method void setIsExperienceSupported(boolean $IsExperienceSupported) Set <p>Whether direct experience in the intelligent workbench is supported (model plaza details page: dynamically determined based on space_id; when false, the frontend disables the "experience now" button)</p>
 * @method integer getResourceStatus() Obtain <p>Resource status</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_STATUS_UNSPECIFIED</td><td>0</td><td>Not specified</td></tr><tr><td>RESOURCE_STATUS_AVAILABLE</td><td>1</td><td>Resource available</td></tr><tr><td>RESOURCE_STATUS_EXHAUSTED</td><td>2</td><td>Resource exhausted</td></tr></table>
 * @method void setResourceStatus(integer $ResourceStatus) Set <p>Resource status</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_STATUS_UNSPECIFIED</td><td>0</td><td>Not specified</td></tr><tr><td>RESOURCE_STATUS_AVAILABLE</td><td>1</td><td>Resource available</td></tr><tr><td>RESOURCE_STATUS_EXHAUSTED</td><td>2</td><td>Resource exhausted</td></tr></table>
 * @method string getRpmLimit() Obtain <p>RPM call cap (current account dimension: use the configured value if available; otherwise, take default. 0 means not obtained)</p>
 * @method void setRpmLimit(string $RpmLimit) Set <p>RPM call cap (current account dimension: use the configured value if available; otherwise, take default. 0 means not obtained)</p>
 * @method string getTpmLimit() Obtain <p>TPM call upper limit (at the current account level: use the configured value if available; otherwise, take default. 0 means failed to obtain)</p>
 * @method void setTpmLimit(string $TpmLimit) Set <p>TPM call upper limit (at the current account level: use the configured value if available; otherwise, take default. 0 means failed to obtain)</p>
 */
class ModelStatus extends AbstractModel
{
    /**
     * @var integer <p>Number of exclusive concurrencies</p>
     */
    public $Concurrency;

    /**
     * @var boolean <p>Whether it is exclusive concurrency</p>
     */
    public $IsExclusive;

    /**
     * @var boolean <p>Whether direct experience in the intelligent workbench is supported (model plaza details page: dynamically determined based on space_id; when false, the frontend disables the "experience now" button)</p>
     */
    public $IsExperienceSupported;

    /**
     * @var integer <p>Resource status</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_STATUS_UNSPECIFIED</td><td>0</td><td>Not specified</td></tr><tr><td>RESOURCE_STATUS_AVAILABLE</td><td>1</td><td>Resource available</td></tr><tr><td>RESOURCE_STATUS_EXHAUSTED</td><td>2</td><td>Resource exhausted</td></tr></table>
     */
    public $ResourceStatus;

    /**
     * @var string <p>RPM call cap (current account dimension: use the configured value if available; otherwise, take default. 0 means not obtained)</p>
     */
    public $RpmLimit;

    /**
     * @var string <p>TPM call upper limit (at the current account level: use the configured value if available; otherwise, take default. 0 means failed to obtain)</p>
     */
    public $TpmLimit;

    /**
     * @param integer $Concurrency <p>Number of exclusive concurrencies</p>
     * @param boolean $IsExclusive <p>Whether it is exclusive concurrency</p>
     * @param boolean $IsExperienceSupported <p>Whether direct experience in the intelligent workbench is supported (model plaza details page: dynamically determined based on space_id; when false, the frontend disables the "experience now" button)</p>
     * @param integer $ResourceStatus <p>Resource status</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>RESOURCE_STATUS_UNSPECIFIED</td><td>0</td><td>Not specified</td></tr><tr><td>RESOURCE_STATUS_AVAILABLE</td><td>1</td><td>Resource available</td></tr><tr><td>RESOURCE_STATUS_EXHAUSTED</td><td>2</td><td>Resource exhausted</td></tr></table>
     * @param string $RpmLimit <p>RPM call cap (current account dimension: use the configured value if available; otherwise, take default. 0 means not obtained)</p>
     * @param string $TpmLimit <p>TPM call upper limit (at the current account level: use the configured value if available; otherwise, take default. 0 means failed to obtain)</p>
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
        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = $param["Concurrency"];
        }

        if (array_key_exists("IsExclusive",$param) and $param["IsExclusive"] !== null) {
            $this->IsExclusive = $param["IsExclusive"];
        }

        if (array_key_exists("IsExperienceSupported",$param) and $param["IsExperienceSupported"] !== null) {
            $this->IsExperienceSupported = $param["IsExperienceSupported"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("RpmLimit",$param) and $param["RpmLimit"] !== null) {
            $this->RpmLimit = $param["RpmLimit"];
        }

        if (array_key_exists("TpmLimit",$param) and $param["TpmLimit"] !== null) {
            $this->TpmLimit = $param["TpmLimit"];
        }
    }
}
