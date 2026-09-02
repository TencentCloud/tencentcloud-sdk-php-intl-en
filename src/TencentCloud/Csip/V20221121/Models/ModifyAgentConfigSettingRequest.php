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
 * ModifyAgentConfigSetting request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getLogCollectSettings() Obtain <p>List of log collection types. Available values: tcp_src_port/tcp_ingress/http_egress/http_ingress/app_access</p>
 * @method void setLogCollectSettings(array $LogCollectSettings) Set <p>List of log collection types. Available values: tcp_src_port/tcp_ingress/http_egress/http_ingress/app_access</p>
 * @method string getAssetSelectionType() Obtain <p>Asset selection method: all - all paid assets, tag - select by tag, direct - direct selection</p>
 * @method void setAssetSelectionType(string $AssetSelectionType) Set <p>Asset selection method: all - all paid assets, tag - select by tag, direct - direct selection</p>
 * @method array getTagIds() Obtain <p>Tag ID array used when selecting by tag (used when AssetSelectionType=tag)</p>
 * @method void setTagIds(array $TagIds) Set <p>Tag ID array used when selecting by tag (used when AssetSelectionType=tag)</p>
 * @method array getInstanceIDs() Obtain <p>direct selection of the host instance_id list (used when AssetSelectionType=direct)</p>
 * @method void setInstanceIDs(array $InstanceIDs) Set <p>direct selection of the host instance_id list (used when AssetSelectionType=direct)</p>
 * @method array getExcludeInstanceIDs() Obtain <p>Exclusion instance_id list of the host (used when AssetSelectionType=all)</p>
 * @method void setExcludeInstanceIDs(array $ExcludeInstanceIDs) Set <p>Exclusion instance_id list of the host (used when AssetSelectionType=all)</p>
 */
class ModifyAgentConfigSettingRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>List of log collection types. Available values: tcp_src_port/tcp_ingress/http_egress/http_ingress/app_access</p>
     */
    public $LogCollectSettings;

    /**
     * @var string <p>Asset selection method: all - all paid assets, tag - select by tag, direct - direct selection</p>
     */
    public $AssetSelectionType;

    /**
     * @var array <p>Tag ID array used when selecting by tag (used when AssetSelectionType=tag)</p>
     */
    public $TagIds;

    /**
     * @var array <p>direct selection of the host instance_id list (used when AssetSelectionType=direct)</p>
     */
    public $InstanceIDs;

    /**
     * @var array <p>Exclusion instance_id list of the host (used when AssetSelectionType=all)</p>
     */
    public $ExcludeInstanceIDs;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $LogCollectSettings <p>List of log collection types. Available values: tcp_src_port/tcp_ingress/http_egress/http_ingress/app_access</p>
     * @param string $AssetSelectionType <p>Asset selection method: all - all paid assets, tag - select by tag, direct - direct selection</p>
     * @param array $TagIds <p>Tag ID array used when selecting by tag (used when AssetSelectionType=tag)</p>
     * @param array $InstanceIDs <p>direct selection of the host instance_id list (used when AssetSelectionType=direct)</p>
     * @param array $ExcludeInstanceIDs <p>Exclusion instance_id list of the host (used when AssetSelectionType=all)</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("LogCollectSettings",$param) and $param["LogCollectSettings"] !== null) {
            $this->LogCollectSettings = $param["LogCollectSettings"];
        }

        if (array_key_exists("AssetSelectionType",$param) and $param["AssetSelectionType"] !== null) {
            $this->AssetSelectionType = $param["AssetSelectionType"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("ExcludeInstanceIDs",$param) and $param["ExcludeInstanceIDs"] !== null) {
            $this->ExcludeInstanceIDs = $param["ExcludeInstanceIDs"];
        }
    }
}
