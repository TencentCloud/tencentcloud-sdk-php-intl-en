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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ManageReplication request structure.
 *
 * @method string getSourceRegistryId() Obtain Source instance ID
 * @method void setSourceRegistryId(string $SourceRegistryId) Set Source instance ID
 * @method string getDestinationRegistryId() Obtain Destination instance ID
 * @method void setDestinationRegistryId(string $DestinationRegistryId) Set Destination instance ID
 * @method ReplicationRule getRule() Obtain Synchronization rule
 * @method void setRule(ReplicationRule $Rule) Set Synchronization rule
 * @method string getDescription() Obtain Rule description
 * @method void setDescription(string $Description) Set Rule description
 * @method integer getDestinationRegionId() Obtain Region ID of the destination instance. For example, `1` represents Guangzhou
 * @method void setDestinationRegionId(integer $DestinationRegionId) Set Region ID of the destination instance. For example, `1` represents Guangzhou
 * @method PeerReplicationOption getPeerReplicationOption() Obtain Configuration of the synchronization rule
 * @method void setPeerReplicationOption(PeerReplicationOption $PeerReplicationOption) Set Configuration of the synchronization rule
 */
class ManageReplicationRequest extends AbstractModel
{
    /**
     * @var string Source instance ID
     */
    public $SourceRegistryId;

    /**
     * @var string Destination instance ID
     */
    public $DestinationRegistryId;

    /**
     * @var ReplicationRule Synchronization rule
     */
    public $Rule;

    /**
     * @var string Rule description
     */
    public $Description;

    /**
     * @var integer Region ID of the destination instance. For example, `1` represents Guangzhou
     */
    public $DestinationRegionId;

    /**
     * @var PeerReplicationOption Configuration of the synchronization rule
     */
    public $PeerReplicationOption;

    /**
     * @param string $SourceRegistryId Source instance ID
     * @param string $DestinationRegistryId Destination instance ID
     * @param ReplicationRule $Rule Synchronization rule
     * @param string $Description Rule description
     * @param integer $DestinationRegionId Region ID of the destination instance. For example, `1` represents Guangzhou
     * @param PeerReplicationOption $PeerReplicationOption Configuration of the synchronization rule
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
        if (array_key_exists("SourceRegistryId",$param) and $param["SourceRegistryId"] !== null) {
            $this->SourceRegistryId = $param["SourceRegistryId"];
        }

        if (array_key_exists("DestinationRegistryId",$param) and $param["DestinationRegistryId"] !== null) {
            $this->DestinationRegistryId = $param["DestinationRegistryId"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new ReplicationRule();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DestinationRegionId",$param) and $param["DestinationRegionId"] !== null) {
            $this->DestinationRegionId = $param["DestinationRegionId"];
        }

        if (array_key_exists("PeerReplicationOption",$param) and $param["PeerReplicationOption"] !== null) {
            $this->PeerReplicationOption = new PeerReplicationOption();
            $this->PeerReplicationOption->deserialize($param["PeerReplicationOption"]);
        }
    }
}
