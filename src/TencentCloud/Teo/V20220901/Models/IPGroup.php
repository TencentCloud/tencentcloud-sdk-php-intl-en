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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP range group
 *
 * @method integer getGroupId() Obtain <p>IP group Id. Enter 0 when created.</p>
 * @method void setGroupId(integer $GroupId) Set <p>IP group Id. Enter 0 when created.</p>
 * @method string getName() Obtain <p>IP group name.</p>
 * @method void setName(string $Name) Set <p>IP group name.</p>
 * @method array getContent() Obtain <p>IP group content supports only IP and IP range.</p>
 * @method void setContent(array $Content) Set <p>IP group content supports only IP and IP range.</p>
 * @method integer getIPTotalCount() Obtain <p>Number of IPs or IP ranges that are effective in the IP group. Valid as an output parameter. Not required as an input parameter.</p>
 * @method void setIPTotalCount(integer $IPTotalCount) Set <p>Number of IPs or IP ranges that are effective in the IP group. Valid as an output parameter. Not required as an input parameter.</p>
 * @method array getIPExpireInfo() Obtain <p>Scheduled expiration information for IP.<br>As an input parameter, it is used to specify a scheduled expiration time for a given IP address or IP range.<br>As an output parameter, it contains the following two categories of information:</p><li>Current scheduled expiration information that has not expired: expiration configuration not triggered.</li><li>Scheduled expiration information that has expired within a week: expiration configuration that has been triggered.</li>
 * @method void setIPExpireInfo(array $IPExpireInfo) Set <p>Scheduled expiration information for IP.<br>As an input parameter, it is used to specify a scheduled expiration time for a given IP address or IP range.<br>As an output parameter, it contains the following two categories of information:</p><li>Current scheduled expiration information that has not expired: expiration configuration not triggered.</li><li>Scheduled expiration information that has expired within a week: expiration configuration that has been triggered.</li>
 * @method integer getRefCount() Obtain <p>The number of IP groups referenced.</p>
 * @method void setRefCount(integer $RefCount) Set <p>The number of IP groups referenced.</p>
 */
class IPGroup extends AbstractModel
{
    /**
     * @var integer <p>IP group Id. Enter 0 when created.</p>
     */
    public $GroupId;

    /**
     * @var string <p>IP group name.</p>
     */
    public $Name;

    /**
     * @var array <p>IP group content supports only IP and IP range.</p>
     */
    public $Content;

    /**
     * @var integer <p>Number of IPs or IP ranges that are effective in the IP group. Valid as an output parameter. Not required as an input parameter.</p>
     */
    public $IPTotalCount;

    /**
     * @var array <p>Scheduled expiration information for IP.<br>As an input parameter, it is used to specify a scheduled expiration time for a given IP address or IP range.<br>As an output parameter, it contains the following two categories of information:</p><li>Current scheduled expiration information that has not expired: expiration configuration not triggered.</li><li>Scheduled expiration information that has expired within a week: expiration configuration that has been triggered.</li>
     */
    public $IPExpireInfo;

    /**
     * @var integer <p>The number of IP groups referenced.</p>
     */
    public $RefCount;

    /**
     * @param integer $GroupId <p>IP group Id. Enter 0 when created.</p>
     * @param string $Name <p>IP group name.</p>
     * @param array $Content <p>IP group content supports only IP and IP range.</p>
     * @param integer $IPTotalCount <p>Number of IPs or IP ranges that are effective in the IP group. Valid as an output parameter. Not required as an input parameter.</p>
     * @param array $IPExpireInfo <p>Scheduled expiration information for IP.<br>As an input parameter, it is used to specify a scheduled expiration time for a given IP address or IP range.<br>As an output parameter, it contains the following two categories of information:</p><li>Current scheduled expiration information that has not expired: expiration configuration not triggered.</li><li>Scheduled expiration information that has expired within a week: expiration configuration that has been triggered.</li>
     * @param integer $RefCount <p>The number of IP groups referenced.</p>
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("IPTotalCount",$param) and $param["IPTotalCount"] !== null) {
            $this->IPTotalCount = $param["IPTotalCount"];
        }

        if (array_key_exists("IPExpireInfo",$param) and $param["IPExpireInfo"] !== null) {
            $this->IPExpireInfo = [];
            foreach ($param["IPExpireInfo"] as $key => $value){
                $obj = new IPExpireInfo();
                $obj->deserialize($value);
                array_push($this->IPExpireInfo, $obj);
            }
        }

        if (array_key_exists("RefCount",$param) and $param["RefCount"] !== null) {
            $this->RefCount = $param["RefCount"];
        }
    }
}
