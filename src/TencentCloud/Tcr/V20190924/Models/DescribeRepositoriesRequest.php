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
 * DescribeRepositories request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getNamespaceName() Obtain Specified namespace. If this parameter is left empty, image repositories in all namespaces will be queried.
 * @method void setNamespaceName(string $NamespaceName) Set Specified namespace. If this parameter is left empty, image repositories in all namespaces will be queried.
 * @method string getRepositoryName() Obtain Specified image repository. If this parameter is left empty, all image repositories in the specified namespace will be queried.
 * @method void setRepositoryName(string $RepositoryName) Set Specified image repository. If this parameter is left empty, all image repositories in the specified namespace will be queried.
 * @method integer getOffset() Obtain Page number, which is used for pagination
 * @method void setOffset(integer $Offset) Set Page number, which is used for pagination
 * @method integer getLimit() Obtain Number of entries per page, which is used for pagination
 * @method void setLimit(integer $Limit) Set Number of entries per page, which is used for pagination
 * @method string getSortBy() Obtain Sort field. Valid values: -creation_time, -name, -update_time.
 * @method void setSortBy(string $SortBy) Set Sort field. Valid values: -creation_time, -name, -update_time.
 */
class DescribeRepositoriesRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Specified namespace. If this parameter is left empty, image repositories in all namespaces will be queried.
     */
    public $NamespaceName;

    /**
     * @var string Specified image repository. If this parameter is left empty, all image repositories in the specified namespace will be queried.
     */
    public $RepositoryName;

    /**
     * @var integer Page number, which is used for pagination
     */
    public $Offset;

    /**
     * @var integer Number of entries per page, which is used for pagination
     */
    public $Limit;

    /**
     * @var string Sort field. Valid values: -creation_time, -name, -update_time.
     */
    public $SortBy;

    /**
     * @param string $RegistryId Instance ID
     * @param string $NamespaceName Specified namespace. If this parameter is left empty, image repositories in all namespaces will be queried.
     * @param string $RepositoryName Specified image repository. If this parameter is left empty, all image repositories in the specified namespace will be queried.
     * @param integer $Offset Page number, which is used for pagination
     * @param integer $Limit Number of entries per page, which is used for pagination
     * @param string $SortBy Sort field. Valid values: -creation_time, -name, -update_time.
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

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }
    }
}
