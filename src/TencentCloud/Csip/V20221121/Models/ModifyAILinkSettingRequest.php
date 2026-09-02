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
 * ModifyAILinkSetting request structure.
 *
 * @method integer getAILinkEnable() Obtain <p>0: Turn off the AI-Link engine, 1: Turn on the AI-Link engine</p>
 * @method void setAILinkEnable(integer $AILinkEnable) Set <p>0: Turn off the AI-Link engine, 1: Turn on the AI-Link engine</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getRuleScopeDeep() Obtain <p>Deep mode 0-Off 1-On</p>
 * @method void setRuleScopeDeep(integer $RuleScopeDeep) Set <p>Deep mode 0-Off 1-On</p>
 * @method integer getRuleScopeBalanced() Obtain <p>Balanced mode. 0: off; 1: on</p>
 * @method void setRuleScopeBalanced(integer $RuleScopeBalanced) Set <p>Balanced mode. 0: off; 1: on</p>
 * @method integer getRuleScopePrecise() Obtain <p>Precision mode 0-Disable 1-Enable</p>
 * @method void setRuleScopePrecise(integer $RuleScopePrecise) Set <p>Precision mode 0-Disable 1-Enable</p>
 * @method integer getScope() Obtain <p>1 for all professional/flagship edition hosts, 0 for the selected host list</p>
 * @method void setScope(integer $Scope) Set <p>1 for all professional/flagship edition hosts, 0 for the selected host list</p>
 * @method array getQuuids() Obtain <p>Selected host Quuid list (required when Scope=0)</p>
 * @method void setQuuids(array $Quuids) Set <p>Selected host Quuid list (required when Scope=0)</p>
 * @method array getExcludeQuuids() Obtain <p>Exclusion host Quuid list (this parameter is valid only when Scope=1)</p>
 * @method void setExcludeQuuids(array $ExcludeQuuids) Set <p>Exclusion host Quuid list (this parameter is valid only when Scope=1)</p>
 * @method integer getAutoInclude() Obtain <p>Automatic inclusion of new assets: 0 excludes, 1 includes</p>
 * @method void setAutoInclude(integer $AutoInclude) Set <p>Automatic inclusion of new assets: 0 excludes, 1 includes</p>
 * @method array getTagIDs() Obtain <p>Tag ID</p>
 * @method void setTagIDs(array $TagIDs) Set <p>Tag ID</p>
 * @method integer getTCSSScope() Obtain <p>0,1</p><p>Enumeration values:</p><ul><li>0: Partial</li><li>1: All</li></ul>
 * @method void setTCSSScope(integer $TCSSScope) Set <p>0,1</p><p>Enumeration values:</p><ul><li>0: Partial</li><li>1: All</li></ul>
 * @method array getClusterIDs() Obtain <p>Cluster ID.</p>
 * @method void setClusterIDs(array $ClusterIDs) Set <p>Cluster ID.</p>
 * @method array getExcludeClusterIDs() Obtain <p>Exclude Cluster ID</p>
 * @method void setExcludeClusterIDs(array $ExcludeClusterIDs) Set <p>Exclude Cluster ID</p>
 * @method array getInstanceIds() Obtain <p>Instance ID.</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>Instance ID.</p>
 * @method array getExcludeInstanceIds() Obtain <p>Instance ID exclusion</p>
 * @method void setExcludeInstanceIds(array $ExcludeInstanceIds) Set <p>Instance ID exclusion</p>
 */
class ModifyAILinkSettingRequest extends AbstractModel
{
    /**
     * @var integer <p>0: Turn off the AI-Link engine, 1: Turn on the AI-Link engine</p>
     */
    public $AILinkEnable;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Deep mode 0-Off 1-On</p>
     */
    public $RuleScopeDeep;

    /**
     * @var integer <p>Balanced mode. 0: off; 1: on</p>
     */
    public $RuleScopeBalanced;

    /**
     * @var integer <p>Precision mode 0-Disable 1-Enable</p>
     */
    public $RuleScopePrecise;

    /**
     * @var integer <p>1 for all professional/flagship edition hosts, 0 for the selected host list</p>
     */
    public $Scope;

    /**
     * @var array <p>Selected host Quuid list (required when Scope=0)</p>
     * @deprecated
     */
    public $Quuids;

    /**
     * @var array <p>Exclusion host Quuid list (this parameter is valid only when Scope=1)</p>
     * @deprecated
     */
    public $ExcludeQuuids;

    /**
     * @var integer <p>Automatic inclusion of new assets: 0 excludes, 1 includes</p>
     */
    public $AutoInclude;

    /**
     * @var array <p>Tag ID</p>
     */
    public $TagIDs;

    /**
     * @var integer <p>0,1</p><p>Enumeration values:</p><ul><li>0: Partial</li><li>1: All</li></ul>
     */
    public $TCSSScope;

    /**
     * @var array <p>Cluster ID.</p>
     */
    public $ClusterIDs;

    /**
     * @var array <p>Exclude Cluster ID</p>
     */
    public $ExcludeClusterIDs;

    /**
     * @var array <p>Instance ID.</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>Instance ID exclusion</p>
     */
    public $ExcludeInstanceIds;

    /**
     * @param integer $AILinkEnable <p>0: Turn off the AI-Link engine, 1: Turn on the AI-Link engine</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $RuleScopeDeep <p>Deep mode 0-Off 1-On</p>
     * @param integer $RuleScopeBalanced <p>Balanced mode. 0: off; 1: on</p>
     * @param integer $RuleScopePrecise <p>Precision mode 0-Disable 1-Enable</p>
     * @param integer $Scope <p>1 for all professional/flagship edition hosts, 0 for the selected host list</p>
     * @param array $Quuids <p>Selected host Quuid list (required when Scope=0)</p>
     * @param array $ExcludeQuuids <p>Exclusion host Quuid list (this parameter is valid only when Scope=1)</p>
     * @param integer $AutoInclude <p>Automatic inclusion of new assets: 0 excludes, 1 includes</p>
     * @param array $TagIDs <p>Tag ID</p>
     * @param integer $TCSSScope <p>0,1</p><p>Enumeration values:</p><ul><li>0: Partial</li><li>1: All</li></ul>
     * @param array $ClusterIDs <p>Cluster ID.</p>
     * @param array $ExcludeClusterIDs <p>Exclude Cluster ID</p>
     * @param array $InstanceIds <p>Instance ID.</p>
     * @param array $ExcludeInstanceIds <p>Instance ID exclusion</p>
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
        if (array_key_exists("AILinkEnable",$param) and $param["AILinkEnable"] !== null) {
            $this->AILinkEnable = $param["AILinkEnable"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RuleScopeDeep",$param) and $param["RuleScopeDeep"] !== null) {
            $this->RuleScopeDeep = $param["RuleScopeDeep"];
        }

        if (array_key_exists("RuleScopeBalanced",$param) and $param["RuleScopeBalanced"] !== null) {
            $this->RuleScopeBalanced = $param["RuleScopeBalanced"];
        }

        if (array_key_exists("RuleScopePrecise",$param) and $param["RuleScopePrecise"] !== null) {
            $this->RuleScopePrecise = $param["RuleScopePrecise"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ExcludeQuuids",$param) and $param["ExcludeQuuids"] !== null) {
            $this->ExcludeQuuids = $param["ExcludeQuuids"];
        }

        if (array_key_exists("AutoInclude",$param) and $param["AutoInclude"] !== null) {
            $this->AutoInclude = $param["AutoInclude"];
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("ClusterIDs",$param) and $param["ClusterIDs"] !== null) {
            $this->ClusterIDs = $param["ClusterIDs"];
        }

        if (array_key_exists("ExcludeClusterIDs",$param) and $param["ExcludeClusterIDs"] !== null) {
            $this->ExcludeClusterIDs = $param["ExcludeClusterIDs"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ExcludeInstanceIds",$param) and $param["ExcludeInstanceIds"] !== null) {
            $this->ExcludeInstanceIds = $param["ExcludeInstanceIds"];
        }
    }
}
