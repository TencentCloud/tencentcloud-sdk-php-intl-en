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
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getChannelName() Obtain Channel name
 * @method void setChannelName(string $ChannelName) Set Channel name
 * @method integer getOrgId() Obtain Organization ID
 * @method void setOrgId(integer $OrgId) Set Organization ID
 * @method array getReceivers() Obtain Array of notification channel IDs
 * @method void setReceivers(array $Receivers) Set Array of notification channel IDs
 * @method array getExtraOrgIds() Obtain Array of extra organization IDs
 * @method void setExtraOrgIds(array $ExtraOrgIds) Set Array of extra organization IDs
 * @method array getOrganizationIds() Obtain 
 * @method void setOrganizationIds(array $OrganizationIds) Set 
 */
class CreateGrafanaNotificationChannelRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Channel name
     */
    public $ChannelName;

    /**
     * @var integer Organization ID
     */
    public $OrgId;

    /**
     * @var array Array of notification channel IDs
     */
    public $Receivers;

    /**
     * @var array Array of extra organization IDs
     */
    public $ExtraOrgIds;

    /**
     * @var array 
     */
    public $OrganizationIds;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $ChannelName Channel name
     * @param integer $OrgId Organization ID
     * @param array $Receivers Array of notification channel IDs
     * @param array $ExtraOrgIds Array of extra organization IDs
     * @param array $OrganizationIds 
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
