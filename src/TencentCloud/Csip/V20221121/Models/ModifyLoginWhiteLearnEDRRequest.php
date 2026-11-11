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
 * ModifyLoginWhiteLearnEDR request structure.
 *
 * @method integer getId() Obtain <p>Rule ID; for self-learning, it is the rule group ID (minimum line ID in the group)</p>
 * @method void setId(integer $Id) Set <p>Rule ID; for self-learning, it is the rule group ID (minimum line ID in the group)</p>
 * @method array getPlaces() Obtain <p>List of common login locations. Required. 1-200 entries. It is the unique content dimension of the self-learning rule.</p>
 * @method void setPlaces(array $Places) Set <p>List of common login locations. Required. 1-200 entries. It is the unique content dimension of the self-learning rule.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getRuleAppId() Obtain <p>AppId of the account associated with the policy (obtained from the list output parameter AppId); if empty, the current account is used; non-current accounts must pass ownership verification</p>
 * @method void setRuleAppId(integer $RuleAppId) Set <p>AppId of the account associated with the policy (obtained from the list output parameter AppId); if empty, the current account is used; non-current accounts must pass ownership verification</p>
 * @method string getRemark() Obtain <p>Remark, up to 255 characters</p>
 * @method void setRemark(string $Remark) Set <p>Remark, up to 255 characters</p>
 * @method integer getScope() Obtain <p>Effective asset scope: 0-specified hosts (host or tag hit) 1-all hosts</p>
 * @method void setScope(integer $Scope) Set <p>Effective asset scope: 0-specified hosts (host or tag hit) 1-all hosts</p>
 * @method array getInstanceIDsWithAppId() Obtain <p>List of specified hosts (in instance ID form), up to 10,000 items. The server translates them to QUUIDs via idmap, then merges and deduplicates them with QUUIDSWithAppId.</p>
 * @method void setInstanceIDsWithAppId(array $InstanceIDsWithAppId) Set <p>List of specified hosts (in instance ID form), up to 10,000 items. The server translates them to QUUIDs via idmap, then merges and deduplicates them with QUUIDSWithAppId.</p>
 * @method array getExcludeInstanceIDsWithAppId() Obtain <p>List of hosts (instance ID form) to remove, up to 10,000 items</p>
 * @method void setExcludeInstanceIDsWithAppId(array $ExcludeInstanceIDsWithAppId) Set <p>List of hosts (instance ID form) to remove, up to 10,000 items</p>
 * @method array getTagIDs() Obtain <p>Security center tag ID list, up to 100. When Scope=0, it is in an OR relationship with the host. Self-learning allowlist does not support taking effect by tag (a non-empty value will be rejected).</p>
 * @method void setTagIDs(array $TagIDs) Set <p>Security center tag ID list, up to 100. When Scope=0, it is in an OR relationship with the host. Self-learning allowlist does not support taking effect by tag (a non-empty value will be rejected).</p>
 */
class ModifyLoginWhiteLearnEDRRequest extends AbstractModel
{
    /**
     * @var integer <p>Rule ID; for self-learning, it is the rule group ID (minimum line ID in the group)</p>
     */
    public $Id;

    /**
     * @var array <p>List of common login locations. Required. 1-200 entries. It is the unique content dimension of the self-learning rule.</p>
     */
    public $Places;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>AppId of the account associated with the policy (obtained from the list output parameter AppId); if empty, the current account is used; non-current accounts must pass ownership verification</p>
     */
    public $RuleAppId;

    /**
     * @var string <p>Remark, up to 255 characters</p>
     */
    public $Remark;

    /**
     * @var integer <p>Effective asset scope: 0-specified hosts (host or tag hit) 1-all hosts</p>
     */
    public $Scope;

    /**
     * @var array <p>List of specified hosts (in instance ID form), up to 10,000 items. The server translates them to QUUIDs via idmap, then merges and deduplicates them with QUUIDSWithAppId.</p>
     */
    public $InstanceIDsWithAppId;

    /**
     * @var array <p>List of hosts (instance ID form) to remove, up to 10,000 items</p>
     */
    public $ExcludeInstanceIDsWithAppId;

    /**
     * @var array <p>Security center tag ID list, up to 100. When Scope=0, it is in an OR relationship with the host. Self-learning allowlist does not support taking effect by tag (a non-empty value will be rejected).</p>
     */
    public $TagIDs;

    /**
     * @param integer $Id <p>Rule ID; for self-learning, it is the rule group ID (minimum line ID in the group)</p>
     * @param array $Places <p>List of common login locations. Required. 1-200 entries. It is the unique content dimension of the self-learning rule.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $RuleAppId <p>AppId of the account associated with the policy (obtained from the list output parameter AppId); if empty, the current account is used; non-current accounts must pass ownership verification</p>
     * @param string $Remark <p>Remark, up to 255 characters</p>
     * @param integer $Scope <p>Effective asset scope: 0-specified hosts (host or tag hit) 1-all hosts</p>
     * @param array $InstanceIDsWithAppId <p>List of specified hosts (in instance ID form), up to 10,000 items. The server translates them to QUUIDs via idmap, then merges and deduplicates them with QUUIDSWithAppId.</p>
     * @param array $ExcludeInstanceIDsWithAppId <p>List of hosts (instance ID form) to remove, up to 10,000 items</p>
     * @param array $TagIDs <p>Security center tag ID list, up to 100. When Scope=0, it is in an OR relationship with the host. Self-learning allowlist does not support taking effect by tag (a non-empty value will be rejected).</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Places",$param) and $param["Places"] !== null) {
            $this->Places = [];
            foreach ($param["Places"] as $key => $value){
                $obj = new LoginWhitePlaceInput();
                $obj->deserialize($value);
                array_push($this->Places, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RuleAppId",$param) and $param["RuleAppId"] !== null) {
            $this->RuleAppId = $param["RuleAppId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("InstanceIDsWithAppId",$param) and $param["InstanceIDsWithAppId"] !== null) {
            $this->InstanceIDsWithAppId = [];
            foreach ($param["InstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->InstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeInstanceIDsWithAppId",$param) and $param["ExcludeInstanceIDsWithAppId"] !== null) {
            $this->ExcludeInstanceIDsWithAppId = [];
            foreach ($param["ExcludeInstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeInstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }
    }
}
