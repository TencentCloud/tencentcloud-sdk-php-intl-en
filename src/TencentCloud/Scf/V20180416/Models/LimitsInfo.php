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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Limit information
 *
 * @method integer getNamespacesCount() Obtain Limit of namespace quantity
 * @method void setNamespacesCount(integer $NamespacesCount) Set Limit of namespace quantity
 * @method array getNamespace() Obtain Namespace limit information
 * @method void setNamespace(array $Namespace) Set Namespace limit information
 */
class LimitsInfo extends AbstractModel
{
    /**
     * @var integer Limit of namespace quantity
     */
    public $NamespacesCount;

    /**
     * @var array Namespace limit information
     */
    public $Namespace;

    /**
     * @param integer $NamespacesCount Limit of namespace quantity
     * @param array $Namespace Namespace limit information
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
        if (array_key_exists("NamespacesCount",$param) and $param["NamespacesCount"] !== null) {
            $this->NamespacesCount = $param["NamespacesCount"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = [];
            foreach ($param["Namespace"] as $key => $value){
                $obj = new NamespaceLimit();
                $obj->deserialize($value);
                array_push($this->Namespace, $obj);
            }
        }
    }
}
