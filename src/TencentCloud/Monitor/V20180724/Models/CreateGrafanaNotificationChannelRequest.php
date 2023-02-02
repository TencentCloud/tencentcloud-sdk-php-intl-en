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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGrafanaNotificationChannel request structure.
 *
 * @method string getInstanceId() Obtain TCMG instance ID, such as “grafana-abcdefgh”.
 * @method void setInstanceId(string $InstanceId) Set TCMG instance ID, such as “grafana-abcdefgh”.
 * @method string getChannelName() Obtain Alert channel name, such as “test”.
 * @method void setChannelName(string $ChannelName) Set Alert channel name, such as “test”.
 * @method integer getOrgId() Obtain Default value: `1`. This parameter has been deprecated. Please use `OrganizationIds` instead.
 * @method void setOrgId(integer $OrgId) Set Default value: `1`. This parameter has been deprecated. Please use `OrganizationIds` instead.
 * @method array getReceivers() Obtain Array of notification channel IDs
 * @method void setReceivers(array $Receivers) Set Array of notification channel IDs
 * @method array getExtraOrgIds() Obtain Array of extra organization IDs. This parameter has been deprecated. Please use `OrganizationIds` instead.
 * @method void setExtraOrgIds(array $ExtraOrgIds) Set Array of extra organization IDs. This parameter has been deprecated. Please use `OrganizationIds` instead.
 * @method array getOrganizationIds() Obtain Array of all valid organization IDs. Default value: `1`.
 * @method void setOrganizationIds(array $OrganizationIds) Set Array of all valid organization IDs. Default value: `1`.
 */
class CreateGrafanaNotificationChannelRequest extends AbstractModel
{
    /**
     * @var string TCMG instance ID, such as “grafana-abcdefgh”.
     */
    public $InstanceId;

    /**
     * @var string Alert channel name, such as “test”.
     */
    public $ChannelName;

    /**
     * @var integer Default value: `1`. This parameter has been deprecated. Please use `OrganizationIds` instead.
     */
    public $OrgId;

    /**
     * @var array Array of notification channel IDs
     */
    public $Receivers;

    /**
     * @var array Array of extra organization IDs. This parameter has been deprecated. Please use `OrganizationIds` instead.
     */
    public $ExtraOrgIds;

    /**
     * @var array Array of all valid organization IDs. Default value: `1`.
     */
    public $OrganizationIds;

    /**
     * @param string $InstanceId TCMG instance ID, such as “grafana-abcdefgh”.
     * @param string $ChannelName Alert channel name, such as “test”.
     * @param integer $OrgId Default value: `1`. This parameter has been deprecated. Please use `OrganizationIds` instead.
     * @param array $Receivers Array of notification channel IDs
     * @param array $ExtraOrgIds Array of extra organization IDs. This parameter has been deprecated. Please use `OrganizationIds` instead.
     * @param array $OrganizationIds Array of all valid organization IDs. Default value: `1`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("ExtraOrgIds",$param) and $param["ExtraOrgIds"] !== null) {
            $this->ExtraOrgIds = $param["ExtraOrgIds"];
        }

        if (array_key_exists("OrganizationIds",$param) and $param["OrganizationIds"] !== null) {
            $this->OrganizationIds = $param["OrganizationIds"];
        }
    }
}
