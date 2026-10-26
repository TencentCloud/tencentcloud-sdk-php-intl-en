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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchAssignVLPlanChannels request structure.
 *
 * @method string getVLPlanId() Obtain <p>Plan ID</p>
 * @method void setVLPlanId(string $VLPlanId) Set <p>Plan ID</p>
 * @method integer getCmd() Obtain <p>Operation command: 1=associate, 2=unbind</p>
 * @method void setCmd(integer $Cmd) Set <p>Operation command: 1=associate, 2=unbind</p>
 * @method array getChannelIds() Obtain <p>Channel ID list, up to 500; pass at least one of this parameter and OrganizationIds (when Cmd=1)</p>
 * @method void setChannelIds(array $ChannelIds) Set <p>Channel ID list, up to 500; pass at least one of this parameter and OrganizationIds (when Cmd=1)</p>
 * @method array getOrganizationIds() Obtain <p>List of organization IDs (valid only when Cmd=1; does not allow input when Cmd=2); unfold all channels under the organization to participate in association, and take the union with ChannelIds and remove duplicates</p>
 * @method void setOrganizationIds(array $OrganizationIds) Set <p>List of organization IDs (valid only when Cmd=1; does not allow input when Cmd=2); unfold all channels under the organization to participate in association, and take the union with ChannelIds and remove duplicates</p>
 */
class BatchAssignVLPlanChannelsRequest extends AbstractModel
{
    /**
     * @var string <p>Plan ID</p>
     */
    public $VLPlanId;

    /**
     * @var integer <p>Operation command: 1=associate, 2=unbind</p>
     */
    public $Cmd;

    /**
     * @var array <p>Channel ID list, up to 500; pass at least one of this parameter and OrganizationIds (when Cmd=1)</p>
     */
    public $ChannelIds;

    /**
     * @var array <p>List of organization IDs (valid only when Cmd=1; does not allow input when Cmd=2); unfold all channels under the organization to participate in association, and take the union with ChannelIds and remove duplicates</p>
     */
    public $OrganizationIds;

    /**
     * @param string $VLPlanId <p>Plan ID</p>
     * @param integer $Cmd <p>Operation command: 1=associate, 2=unbind</p>
     * @param array $ChannelIds <p>Channel ID list, up to 500; pass at least one of this parameter and OrganizationIds (when Cmd=1)</p>
     * @param array $OrganizationIds <p>List of organization IDs (valid only when Cmd=1; does not allow input when Cmd=2); unfold all channels under the organization to participate in association, and take the union with ChannelIds and remove duplicates</p>
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
        if (array_key_exists("VLPlanId",$param) and $param["VLPlanId"] !== null) {
            $this->VLPlanId = $param["VLPlanId"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("ChannelIds",$param) and $param["ChannelIds"] !== null) {
            $this->ChannelIds = $param["ChannelIds"];
        }

        if (array_key_exists("OrganizationIds",$param) and $param["OrganizationIds"] !== null) {
            $this->OrganizationIds = $param["OrganizationIds"];
        }
    }
}
