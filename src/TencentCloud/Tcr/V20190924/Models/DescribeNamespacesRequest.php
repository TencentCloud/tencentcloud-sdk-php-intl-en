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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNamespaces request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getNamespaceName() Obtain Specified namespace. If this parameter is left empty, all namespaces will be queried.
 * @method void setNamespaceName(string $NamespaceName) Set Specified namespace. If this parameter is left empty, all namespaces will be queried.
 * @method integer getLimit() Obtain Number of entries per page
 * @method void setLimit(integer $Limit) Set Number of entries per page
 * @method integer getOffset() Obtain Page offset (page number from which to return the results)
 * @method void setOffset(integer $Offset) Set Page offset (page number from which to return the results)
 * @method boolean getAll() Obtain Whether to list all namespaces
 * @method void setAll(boolean $All) Set Whether to list all namespaces
 * @method array getFilters() Obtain Filters
 * @method void setFilters(array $Filters) Set Filters
 * @method boolean getKmsSignPolicy() Obtain Whether to query only namespaces for which the KMS image signature is enabled
 * @method void setKmsSignPolicy(boolean $KmsSignPolicy) Set Whether to query only namespaces for which the KMS image signature is enabled
 */
class DescribeNamespacesRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Specified namespace. If this parameter is left empty, all namespaces will be queried.
     */
    public $NamespaceName;

    /**
     * @var integer Number of entries per page
     */
    public $Limit;

    /**
     * @var integer Page offset (page number from which to return the results)
     */
    public $Offset;

    /**
     * @var boolean Whether to list all namespaces
     */
    public $All;

    /**
     * @var array Filters
     */
    public $Filters;

    /**
     * @var boolean Whether to query only namespaces for which the KMS image signature is enabled
     */
    public $KmsSignPolicy;

    /**
     * @param string $RegistryId Instance ID
     * @param string $NamespaceName Specified namespace. If this parameter is left empty, all namespaces will be queried.
     * @param integer $Limit Number of entries per page
     * @param integer $Offset Page offset (page number from which to return the results)
     * @param boolean $All Whether to list all namespaces
     * @param array $Filters Filters
     * @param boolean $KmsSignPolicy Whether to query only namespaces for which the KMS image signature is enabled
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("KmsSignPolicy",$param) and $param["KmsSignPolicy"] !== null) {
            $this->KmsSignPolicy = $param["KmsSignPolicy"];
        }
    }
}
