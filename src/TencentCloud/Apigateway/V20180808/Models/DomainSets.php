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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom service domain name information
 *
 * @method integer getTotalCount() Obtain Number of custom domain names under service
 * @method void setTotalCount(integer $TotalCount) Set Number of custom domain names under service
 * @method array getDomainSet() Obtain Custom service domain name list.
 * @method void setDomainSet(array $DomainSet) Set Custom service domain name list.
 */
class DomainSets extends AbstractModel
{
    /**
     * @var integer Number of custom domain names under service
     */
    public $TotalCount;

    /**
     * @var array Custom service domain name list.
     */
    public $DomainSet;

    /**
     * @param integer $TotalCount Number of custom domain names under service
     * @param array $DomainSet Custom service domain name list.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DomainSet",$param) and $param["DomainSet"] !== null) {
            $this->DomainSet = [];
            foreach ($param["DomainSet"] as $key => $value){
                $obj = new DomainSetList();
                $obj->deserialize($value);
                array_push($this->DomainSet, $obj);
            }
        }
    }
}
