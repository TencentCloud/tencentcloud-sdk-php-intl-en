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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Virtual host quota.
 *
 * @method integer getMaxVirtualHost() Obtain Maximum number of virtual hosts.
 * @method void setMaxVirtualHost(integer $MaxVirtualHost) Set Maximum number of virtual hosts.
 * @method integer getUsedVirtualHost() Obtain Number of already used virtual hosts.
 * @method void setUsedVirtualHost(integer $UsedVirtualHost) Set Number of already used virtual hosts.
 */
class VirtualHostQuota extends AbstractModel
{
    /**
     * @var integer Maximum number of virtual hosts.
     */
    public $MaxVirtualHost;

    /**
     * @var integer Number of already used virtual hosts.
     */
    public $UsedVirtualHost;

    /**
     * @param integer $MaxVirtualHost Maximum number of virtual hosts.
     * @param integer $UsedVirtualHost Number of already used virtual hosts.
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
        if (array_key_exists("MaxVirtualHost",$param) and $param["MaxVirtualHost"] !== null) {
            $this->MaxVirtualHost = $param["MaxVirtualHost"];
        }

        if (array_key_exists("UsedVirtualHost",$param) and $param["UsedVirtualHost"] !== null) {
            $this->UsedVirtualHost = $param["UsedVirtualHost"];
        }
    }
}
