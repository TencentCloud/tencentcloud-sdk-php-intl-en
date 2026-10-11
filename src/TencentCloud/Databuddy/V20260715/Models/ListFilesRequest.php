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
 * ListFiles request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace id</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace id</p>
 * @method FolderLocator getParent() Obtain <p>Parent directory. If left blank, the root node is queried by default.</p>
 * @method void setParent(FolderLocator $Parent) Set <p>Parent directory. If left blank, the root node is queried by default.</p>
 * @method array getFileTypes() Obtain <p>Filter by file type</p>
 * @method void setFileTypes(array $FileTypes) Set <p>Filter by file type</p>
 * @method string getNameKeyword() Obtain <p>Fuzzy matching by file name</p>
 * @method void setNameKeyword(string $NameKeyword) Set <p>Fuzzy matching by file name</p>
 * @method array getOwnerUserUins() Obtain <p>Filter by owner UIN. Multiple values are OR-related</p>
 * @method void setOwnerUserUins(array $OwnerUserUins) Set <p>Filter by owner UIN. Multiple values are OR-related</p>
 * @method boolean getOnlyFolder() Obtain <p>Whether to list folders only. Default false.</p>
 * @method void setOnlyFolder(boolean $OnlyFolder) Set <p>Whether to list folders only. Default false.</p>
 * @method array getOrderBys() Obtain <p>Sorting field list, for example, creation time [{Name: 'CreateTime', Direction: 'DESC'}], file name [{Name: 'Name', Direction: 'ASC'}]</p>
 * @method void setOrderBys(array $OrderBys) Set <p>Sorting field list, for example, creation time [{Name: 'CreateTime', Direction: 'DESC'}], file name [{Name: 'Name', Direction: 'ASC'}]</p>
 * @method integer getPageNumber() Obtain <p>Page number. Default value: 1. Minimum value: 1.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Default value: 1. Minimum value: 1.</p>
 * @method integer getPageSize() Obtain <p>Entries per page. Default: 10. Minimum value: 10. Maximum value: 100</p><p>Value range: [10, 100]</p>
 * @method void setPageSize(integer $PageSize) Set <p>Entries per page. Default: 10. Minimum value: 10. Maximum value: 100</p><p>Value range: [10, 100]</p>
 */
class ListFilesRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace id</p>
     */
    public $WorkspaceId;

    /**
     * @var FolderLocator <p>Parent directory. If left blank, the root node is queried by default.</p>
     */
    public $Parent;

    /**
     * @var array <p>Filter by file type</p>
     */
    public $FileTypes;

    /**
     * @var string <p>Fuzzy matching by file name</p>
     */
    public $NameKeyword;

    /**
     * @var array <p>Filter by owner UIN. Multiple values are OR-related</p>
     */
    public $OwnerUserUins;

    /**
     * @var boolean <p>Whether to list folders only. Default false.</p>
     */
    public $OnlyFolder;

    /**
     * @var array <p>Sorting field list, for example, creation time [{Name: 'CreateTime', Direction: 'DESC'}], file name [{Name: 'Name', Direction: 'ASC'}]</p>
     */
    public $OrderBys;

    /**
     * @var integer <p>Page number. Default value: 1. Minimum value: 1.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Entries per page. Default: 10. Minimum value: 10. Maximum value: 100</p><p>Value range: [10, 100]</p>
     */
    public $PageSize;

    /**
     * @param string $WorkspaceId <p>Workspace id</p>
     * @param FolderLocator $Parent <p>Parent directory. If left blank, the root node is queried by default.</p>
     * @param array $FileTypes <p>Filter by file type</p>
     * @param string $NameKeyword <p>Fuzzy matching by file name</p>
     * @param array $OwnerUserUins <p>Filter by owner UIN. Multiple values are OR-related</p>
     * @param boolean $OnlyFolder <p>Whether to list folders only. Default false.</p>
     * @param array $OrderBys <p>Sorting field list, for example, creation time [{Name: 'CreateTime', Direction: 'DESC'}], file name [{Name: 'Name', Direction: 'ASC'}]</p>
     * @param integer $PageNumber <p>Page number. Default value: 1. Minimum value: 1.</p>
     * @param integer $PageSize <p>Entries per page. Default: 10. Minimum value: 10. Maximum value: 100</p><p>Value range: [10, 100]</p>
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

        if (array_key_exists("Parent",$param) and $param["Parent"] !== null) {
            $this->Parent = new FolderLocator();
            $this->Parent->deserialize($param["Parent"]);
        }

        if (array_key_exists("FileTypes",$param) and $param["FileTypes"] !== null) {
            $this->FileTypes = $param["FileTypes"];
        }

        if (array_key_exists("NameKeyword",$param) and $param["NameKeyword"] !== null) {
            $this->NameKeyword = $param["NameKeyword"];
        }

        if (array_key_exists("OwnerUserUins",$param) and $param["OwnerUserUins"] !== null) {
            $this->OwnerUserUins = $param["OwnerUserUins"];
        }

        if (array_key_exists("OnlyFolder",$param) and $param["OnlyFolder"] !== null) {
            $this->OnlyFolder = $param["OnlyFolder"];
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
    }
}
