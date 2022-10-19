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
 * Grafana alert channel
 *
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method string getChannelName() Obtain Channel name
 * @method void setChannelName(string $ChannelName) Set Channel name
 * @method array getReceivers() Obtain Array of alert channel template IDs
 * @method void setReceivers(array $Receivers) Set Array of alert channel template IDs
 * @method string getCreatedAt() Obtain Creation time
 * @method void setCreatedAt(string $CreatedAt) Set Creation time
 * @method string getUpdatedAt() Obtain Update time
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time
 * @method array getOrganizationIds() Obtain All valid organizations in an alert channel
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrganizationIds(array $OrganizationIds) Set All valid organizations in an alert channel
Note: This field may return null, indicating that no valid values can be obtained.
 */
class GrafanaChannel extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var string Channel name
     */
    public $ChannelName;

    /**
     * @var array Array of alert channel template IDs
     */
    public $Receivers;

    /**
     * @var string Creation time
     */
    public $CreatedAt;

    /**
     * @var string Update time
     */
    public $UpdatedAt;

    /**
     * @var array All valid organizations in an alert channel
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrganizationIds;

    /**
     * @param string $ChannelId Channel ID
     * @param string $ChannelName Channel name
     * @param array $Receivers Array of alert channel template IDs
     * @param string $CreatedAt Creation time
     * @param string $UpdatedAt Update time
     * @param array $OrganizationIds All valid organizations in an alert channel
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("OrganizationIds",$param) and $param["OrganizationIds"] !== null) {
            $this->OrganizationIds = $param["OrganizationIds"];
        }
    }
}
