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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Exclusive edition cluster.
 *
 * @method string getHsmClusterId() Obtain Dedicated cluster Id.
 * @method void setHsmClusterId(string $HsmClusterId) Set Dedicated cluster Id.
 * @method string getHsmClusterName() Obtain Dedicated cluster name.
 * @method void setHsmClusterName(string $HsmClusterName) Set Dedicated cluster name.
 */
class ExclusiveHSM extends AbstractModel
{
    /**
     * @var string Dedicated cluster Id.
     */
    public $HsmClusterId;

    /**
     * @var string Dedicated cluster name.
     */
    public $HsmClusterName;

    /**
     * @param string $HsmClusterId Dedicated cluster Id.
     * @param string $HsmClusterName Dedicated cluster name.
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
        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("HsmClusterName",$param) and $param["HsmClusterName"] !== null) {
            $this->HsmClusterName = $param["HsmClusterName"];
        }
    }
}
