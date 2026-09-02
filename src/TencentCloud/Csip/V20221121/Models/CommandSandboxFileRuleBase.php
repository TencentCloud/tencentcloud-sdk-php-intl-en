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
 * Command sandbox file access rule basic information
 *
 * @method string getRuleName() Obtain <p>rule name</p>
 * @method void setRuleName(string $RuleName) Set <p>rule name</p>
 * @method string getBelongAssetType() Obtain <p>Rule asset scope type</p><p>Enumeration values:</p><ul><li>HOST: Host</li><li>CONTAINER: Container</li></ul>
 * @method void setBelongAssetType(string $BelongAssetType) Set <p>Rule asset scope type</p><p>Enumeration values:</p><ul><li>HOST: Host</li><li>CONTAINER: Container</li></ul>
 * @method TrafficSandboxEffectScope getEffectScope() Obtain <p>Rule effective scope</p>
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) Set <p>Rule effective scope</p>
 * @method string getAction() Obtain <p>Rule behavior type</p><p>Enumeration values:</p><ul><li>RO: read-only</li><li>RW: read-write</li></ul>
 * @method void setAction(string $Action) Set <p>Rule behavior type</p><p>Enumeration values:</p><ul><li>RO: read-only</li><li>RW: read-write</li></ul>
 * @method array getPathWhitelist() Obtain <p>Allowlist path</p>
 * @method void setPathWhitelist(array $PathWhitelist) Set <p>Allowlist path</p>
 * @method string getStatus() Obtain <p>Rule status</p><p>Enumeration values: </p><ul><li>ON: Enablement</li><li>OFF: Disablement</li></ul>
 * @method void setStatus(string $Status) Set <p>Rule status</p><p>Enumeration values: </p><ul><li>ON: Enablement</li><li>OFF: Disablement</li></ul>
 */
class CommandSandboxFileRuleBase extends AbstractModel
{
    /**
     * @var string <p>rule name</p>
     */
    public $RuleName;

    /**
     * @var string <p>Rule asset scope type</p><p>Enumeration values:</p><ul><li>HOST: Host</li><li>CONTAINER: Container</li></ul>
     */
    public $BelongAssetType;

    /**
     * @var TrafficSandboxEffectScope <p>Rule effective scope</p>
     */
    public $EffectScope;

    /**
     * @var string <p>Rule behavior type</p><p>Enumeration values:</p><ul><li>RO: read-only</li><li>RW: read-write</li></ul>
     */
    public $Action;

    /**
     * @var array <p>Allowlist path</p>
     */
    public $PathWhitelist;

    /**
     * @var string <p>Rule status</p><p>Enumeration values: </p><ul><li>ON: Enablement</li><li>OFF: Disablement</li></ul>
     */
    public $Status;

    /**
     * @param string $RuleName <p>rule name</p>
     * @param string $BelongAssetType <p>Rule asset scope type</p><p>Enumeration values:</p><ul><li>HOST: Host</li><li>CONTAINER: Container</li></ul>
     * @param TrafficSandboxEffectScope $EffectScope <p>Rule effective scope</p>
     * @param string $Action <p>Rule behavior type</p><p>Enumeration values:</p><ul><li>RO: read-only</li><li>RW: read-write</li></ul>
     * @param array $PathWhitelist <p>Allowlist path</p>
     * @param string $Status <p>Rule status</p><p>Enumeration values: </p><ul><li>ON: Enablement</li><li>OFF: Disablement</li></ul>
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PathWhitelist",$param) and $param["PathWhitelist"] !== null) {
            $this->PathWhitelist = $param["PathWhitelist"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
