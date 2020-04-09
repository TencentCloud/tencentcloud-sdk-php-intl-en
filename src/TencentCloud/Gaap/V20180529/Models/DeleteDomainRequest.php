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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDomain request structure.
 *
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method string getDomain() Obtain Domain name to be deleted
 * @method void setDomain(string $Domain) Set Domain name to be deleted
 * @method integer getForce() Obtain Whether to make a forced deletion of forwarding rules that have been bound to origin servers. 0: no; 1: yes.
When not making a forced deletion, if there are rules bound to origin servers, they will not be deleted.
 * @method void setForce(integer $Force) Set Whether to make a forced deletion of forwarding rules that have been bound to origin servers. 0: no; 1: yes.
When not making a forced deletion, if there are rules bound to origin servers, they will not be deleted.
 */
class DeleteDomainRequest extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Domain name to be deleted
     */
    public $Domain;

    /**
     * @var integer Whether to make a forced deletion of forwarding rules that have been bound to origin servers. 0: no; 1: yes.
When not making a forced deletion, if there are rules bound to origin servers, they will not be deleted.
     */
    public $Force;

    /**
     * @param string $ListenerId Listener ID
     * @param string $Domain Domain name to be deleted
     * @param integer $Force Whether to make a forced deletion of forwarding rules that have been bound to origin servers. 0: no; 1: yes.
When not making a forced deletion, if there are rules bound to origin servers, they will not be deleted.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
