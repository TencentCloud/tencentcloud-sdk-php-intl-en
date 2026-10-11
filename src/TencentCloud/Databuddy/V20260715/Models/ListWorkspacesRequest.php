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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListWorkspaces request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID exact match</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID exact match</p>
 * @method string getWorkspaceKeyword() Obtain <p>Fuzzy matching by workspace name</p>
 * @method void setWorkspaceKeyword(string $WorkspaceKeyword) Set <p>Fuzzy matching by workspace name</p>
 * @method array getStatusList() Obtain <p>Workspace status filtering (multiple selection): 0=not specified 1=creating 2=creation failure 3=operating normally 4=deleted</p>
 * @method void setStatusList(array $StatusList) Set <p>Workspace status filtering (multiple selection): 0=not specified 1=creating 2=creation failure 3=operating normally 4=deleted</p>
 * @method array getOrderBys() Obtain <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}]; import one for single-field sorting. Default: in descending order by creation time.</p>
 * @method void setOrderBys(array $OrderBys) Set <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}]; import one for single-field sorting. Default: in descending order by creation time.</p>
 * @method integer getPageNumber() Obtain <p>Page number. Value range: starts from 1. Default value: 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Value range: starts from 1. Default value: 1.</p>
 * @method integer getPageSize() Obtain <p>Size per page. Default: 10. Minimum: 10. Maximum: 100</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page. Default: 10. Minimum: 10. Maximum: 100</p>
 * @method array getWorkspaceRegion() Obtain <p>Workspace region filtering (multiple selection), for example, ap-guangzhou</p>
 * @method void setWorkspaceRegion(array $WorkspaceRegion) Set <p>Workspace region filtering (multiple selection), for example, ap-guangzhou</p>
 * @method array getCreator() Obtain <p>Creator UIN filter (multi-option)</p>
 * @method void setCreator(array $Creator) Set <p>Creator UIN filter (multi-option)</p>
 */
class ListWorkspacesRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID exact match</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>Fuzzy matching by workspace name</p>
     */
    public $WorkspaceKeyword;

    /**
     * @var array <p>Workspace status filtering (multiple selection): 0=not specified 1=creating 2=creation failure 3=operating normally 4=deleted</p>
     */
    public $StatusList;

    /**
     * @var array <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}]; import one for single-field sorting. Default: in descending order by creation time.</p>
     */
    public $OrderBys;

    /**
     * @var integer <p>Page number. Value range: starts from 1. Default value: 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Size per page. Default: 10. Minimum: 10. Maximum: 100</p>
     */
    public $PageSize;

    /**
     * @var array <p>Workspace region filtering (multiple selection), for example, ap-guangzhou</p>
     */
    public $WorkspaceRegion;

    /**
     * @var array <p>Creator UIN filter (multi-option)</p>
     */
    public $Creator;

    /**
     * @param string $WorkspaceId <p>Workspace ID exact match</p>
     * @param string $WorkspaceKeyword <p>Fuzzy matching by workspace name</p>
     * @param array $StatusList <p>Workspace status filtering (multiple selection): 0=not specified 1=creating 2=creation failure 3=operating normally 4=deleted</p>
     * @param array $OrderBys <p>Multi-field sorting, for example, [{Name: 'CreateTime', Direction: 'Desc'}]; import one for single-field sorting. Default: in descending order by creation time.</p>
     * @param integer $PageNumber <p>Page number. Value range: starts from 1. Default value: 1.</p>
     * @param integer $PageSize <p>Size per page. Default: 10. Minimum: 10. Maximum: 100</p>
     * @param array $WorkspaceRegion <p>Workspace region filtering (multiple selection), for example, ap-guangzhou</p>
     * @param array $Creator <p>Creator UIN filter (multi-option)</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("WorkspaceKeyword",$param) and $param["WorkspaceKeyword"] !== null) {
            $this->WorkspaceKeyword = $param["WorkspaceKeyword"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("WorkspaceRegion",$param) and $param["WorkspaceRegion"] !== null) {
            $this->WorkspaceRegion = $param["WorkspaceRegion"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
