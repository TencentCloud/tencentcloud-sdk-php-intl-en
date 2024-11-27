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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainPostAction request structure.
 *
 * @method string getDomain() Obtain www.tx.com
 * @method void setDomain(string $Domain) Set www.tx.com
 * @method integer getPostCLSAction() Obtain 0- Disable shipping, 1- Enable shipping
 * @method void setPostCLSAction(integer $PostCLSAction) Set 0- Disable shipping, 1- Enable shipping
 * @method integer getPostCKafkaAction() Obtain 0- Disable shipping, 1- Enable shipping
 * @method void setPostCKafkaAction(integer $PostCKafkaAction) Set 0- Disable shipping, 1- Enable shipping
 */
class ModifyDomainPostActionRequest extends AbstractModel
{
    /**
     * @var string www.tx.com
     */
    public $Domain;

    /**
     * @var integer 0- Disable shipping, 1- Enable shipping
     */
    public $PostCLSAction;

    /**
     * @var integer 0- Disable shipping, 1- Enable shipping
     */
    public $PostCKafkaAction;

    /**
     * @param string $Domain www.tx.com
     * @param integer $PostCLSAction 0- Disable shipping, 1- Enable shipping
     * @param integer $PostCKafkaAction 0- Disable shipping, 1- Enable shipping
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("PostCLSAction",$param) and $param["PostCLSAction"] !== null) {
            $this->PostCLSAction = $param["PostCLSAction"];
        }

        if (array_key_exists("PostCKafkaAction",$param) and $param["PostCKafkaAction"] !== null) {
            $this->PostCKafkaAction = $param["PostCKafkaAction"];
        }
    }
}
