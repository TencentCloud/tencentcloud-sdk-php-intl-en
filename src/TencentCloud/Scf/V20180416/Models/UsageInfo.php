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
 * Usage information
 *
 * @method integer getNamespacesCount() Obtain Number of namespaces
 * @method void setNamespacesCount(integer $NamespacesCount) Set Number of namespaces
 * @method array getNamespace() Obtain Namespace details
 * @method void setNamespace(array $Namespace) Set Namespace details
 * @method integer getTotalConcurrencyMem() Obtain Upper limit of user concurrency memory in the current region
 * @method void setTotalConcurrencyMem(integer $TotalConcurrencyMem) Set Upper limit of user concurrency memory in the current region
 * @method integer getTotalAllocatedConcurrencyMem() Obtain Quota of configured user concurrency memory in the current region
 * @method void setTotalAllocatedConcurrencyMem(integer $TotalAllocatedConcurrencyMem) Set Quota of configured user concurrency memory in the current region
 * @method integer getUserConcurrencyMemLimit() Obtain Quota of account concurrency actually configured by user
 * @method void setUserConcurrencyMemLimit(integer $UserConcurrencyMemLimit) Set Quota of account concurrency actually configured by user
 */
class UsageInfo extends AbstractModel
{
    /**
     * @var integer Number of namespaces
     */
    public $NamespacesCount;

    /**
     * @var array Namespace details
     */
    public $Namespace;

    /**
     * @var integer Upper limit of user concurrency memory in the current region
     */
    public $TotalConcurrencyMem;

    /**
     * @var integer Quota of configured user concurrency memory in the current region
     */
    public $TotalAllocatedConcurrencyMem;

    /**
     * @var integer Quota of account concurrency actually configured by user
     */
    public $UserConcurrencyMemLimit;

    /**
     * @param integer $NamespacesCount Number of namespaces
     * @param array $Namespace Namespace details
     * @param integer $TotalConcurrencyMem Upper limit of user concurrency memory in the current region
     * @param integer $TotalAllocatedConcurrencyMem Quota of configured user concurrency memory in the current region
     * @param integer $UserConcurrencyMemLimit Quota of account concurrency actually configured by user
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
                $obj = new NamespaceUsage();
                $obj->deserialize($value);
                array_push($this->Namespace, $obj);
            }
        }

        if (array_key_exists("TotalConcurrencyMem",$param) and $param["TotalConcurrencyMem"] !== null) {
            $this->TotalConcurrencyMem = $param["TotalConcurrencyMem"];
        }

        if (array_key_exists("TotalAllocatedConcurrencyMem",$param) and $param["TotalAllocatedConcurrencyMem"] !== null) {
            $this->TotalAllocatedConcurrencyMem = $param["TotalAllocatedConcurrencyMem"];
        }

        if (array_key_exists("UserConcurrencyMemLimit",$param) and $param["UserConcurrencyMemLimit"] !== null) {
            $this->UserConcurrencyMemLimit = $param["UserConcurrencyMemLimit"];
        }
    }
}
