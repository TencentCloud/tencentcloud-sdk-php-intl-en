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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLibraDBClusterAccountHost request structure.
 *
 * @method string getClusterId() Obtain Analysis Cluster id
 * @method void setClusterId(string $ClusterId) Set Analysis Cluster id
 * @method InputAccount getAccount() Obtain Account information
 * @method void setAccount(InputAccount $Account) Set Account information
 * @method string getNewHost() Obtain host name
 * @method void setNewHost(string $NewHost) Set host name
 */
class ModifyLibraDBClusterAccountHostRequest extends AbstractModel
{
    /**
     * @var string Analysis Cluster id
     */
    public $ClusterId;

    /**
     * @var InputAccount Account information
     */
    public $Account;

    /**
     * @var string host name
     */
    public $NewHost;

    /**
     * @param string $ClusterId Analysis Cluster id
     * @param InputAccount $Account Account information
     * @param string $NewHost host name
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new InputAccount();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("NewHost",$param) and $param["NewHost"] !== null) {
            $this->NewHost = $param["NewHost"];
        }
    }
}
