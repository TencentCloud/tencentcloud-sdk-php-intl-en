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
 * Data access options for controlling which additional content to return in the response to get/list requests.
 *
 * @method boolean getFetchPermissions() Obtain <p>Whether to return the permission list in response. Default false.</p>
 * @method void setFetchPermissions(boolean $FetchPermissions) Set <p>Whether to return the permission list in response. Default false.</p>
 * @method boolean getFetchFeatureTableDetail() Obtain <p>Whether to obtain feature table details. Valid when AssetType is TABLE.</p>
 * @method void setFetchFeatureTableDetail(boolean $FetchFeatureTableDetail) Set <p>Whether to obtain feature table details. Valid when AssetType is TABLE.</p>
 * @method array getFilterPermissions() Obtain <p>Filter by permission. Pass in a list of permissions to return only entities for which the current user has the specified permissions. For example, passing in ["SELECT_TABLE"] returns only entities for which the current user has the SELECT_TABLE permission. This only takes effect for the list Interface. If empty, no permission filtering is performed.</p>
 * @method void setFilterPermissions(array $FilterPermissions) Set <p>Filter by permission. Pass in a list of permissions to return only entities for which the current user has the specified permissions. For example, passing in ["SELECT_TABLE"] returns only entities for which the current user has the SELECT_TABLE permission. This only takes effect for the list Interface. If empty, no permission filtering is performed.</p>
 * @method boolean getFetchOwners() Obtain <p>Whether to return person in charge information in response. If this parameter is not passed or is true, the person in charge information is returned by default. If it is explicitly set to false, it is not returned.</p>
 * @method void setFetchOwners(boolean $FetchOwners) Set <p>Whether to return person in charge information in response. If this parameter is not passed or is true, the person in charge information is returned by default. If it is explicitly set to false, it is not returned.</p>
 * @method boolean getFetchUserInfo() Obtain <p>Whether to convert user Uin to userName. Impact range: CreatorName/LastModifierName in Audit, OwnerName in MetaOwner. If not passed or set to true, conversion is executed (default conversion). If explicitly set to false, do not convert</p>
 * @method void setFetchUserInfo(boolean $FetchUserInfo) Set <p>Whether to convert user Uin to userName. Impact range: CreatorName/LastModifierName in Audit, OwnerName in MetaOwner. If not passed or set to true, conversion is executed (default conversion). If explicitly set to false, do not convert</p>
 * @method boolean getFetchMask() Obtain <p>Whether to return field masking policy information. It is not returned by default. If true is passed in, the field masking policy information corresponding to the table fields will be queried.</p>
 * @method void setFetchMask(boolean $FetchMask) Set <p>Whether to return field masking policy information. It is not returned by default. If true is passed in, the field masking policy information corresponding to the table fields will be queried.</p>
 * @method boolean getFetchTags() Obtain <p>Whether to return tag information. By default, it is not returned. When set to true, APIs such as GetTable/ListTables/GetCatalog/ListCatalogs/GetSchema/ListSchemas/GetView/ListViews/GetFunction/ListFunctions/GetVolume/ListVolumes/GetModel/ListModels will return the Tags field in the corresponding entity.</p>
 * @method void setFetchTags(boolean $FetchTags) Set <p>Whether to return tag information. By default, it is not returned. When set to true, APIs such as GetTable/ListTables/GetCatalog/ListCatalogs/GetSchema/ListSchemas/GetView/ListViews/GetFunction/ListFunctions/GetVolume/ListVolumes/GetModel/ListModels will return the Tags field in the corresponding entity.</p>
 * @method boolean getFetchDimensions() Obtain <p>Whether to return the dictionary dimension information associated with the returned field. Default not passed, do not return</p>
 * @method void setFetchDimensions(boolean $FetchDimensions) Set <p>Whether to return the dictionary dimension information associated with the returned field. Default not passed, do not return</p>
 */
class FetchOption extends AbstractModel
{
    /**
     * @var boolean <p>Whether to return the permission list in response. Default false.</p>
     */
    public $FetchPermissions;

    /**
     * @var boolean <p>Whether to obtain feature table details. Valid when AssetType is TABLE.</p>
     */
    public $FetchFeatureTableDetail;

    /**
     * @var array <p>Filter by permission. Pass in a list of permissions to return only entities for which the current user has the specified permissions. For example, passing in ["SELECT_TABLE"] returns only entities for which the current user has the SELECT_TABLE permission. This only takes effect for the list Interface. If empty, no permission filtering is performed.</p>
     */
    public $FilterPermissions;

    /**
     * @var boolean <p>Whether to return person in charge information in response. If this parameter is not passed or is true, the person in charge information is returned by default. If it is explicitly set to false, it is not returned.</p>
     */
    public $FetchOwners;

    /**
     * @var boolean <p>Whether to convert user Uin to userName. Impact range: CreatorName/LastModifierName in Audit, OwnerName in MetaOwner. If not passed or set to true, conversion is executed (default conversion). If explicitly set to false, do not convert</p>
     */
    public $FetchUserInfo;

    /**
     * @var boolean <p>Whether to return field masking policy information. It is not returned by default. If true is passed in, the field masking policy information corresponding to the table fields will be queried.</p>
     */
    public $FetchMask;

    /**
     * @var boolean <p>Whether to return tag information. By default, it is not returned. When set to true, APIs such as GetTable/ListTables/GetCatalog/ListCatalogs/GetSchema/ListSchemas/GetView/ListViews/GetFunction/ListFunctions/GetVolume/ListVolumes/GetModel/ListModels will return the Tags field in the corresponding entity.</p>
     */
    public $FetchTags;

    /**
     * @var boolean <p>Whether to return the dictionary dimension information associated with the returned field. Default not passed, do not return</p>
     */
    public $FetchDimensions;

    /**
     * @param boolean $FetchPermissions <p>Whether to return the permission list in response. Default false.</p>
     * @param boolean $FetchFeatureTableDetail <p>Whether to obtain feature table details. Valid when AssetType is TABLE.</p>
     * @param array $FilterPermissions <p>Filter by permission. Pass in a list of permissions to return only entities for which the current user has the specified permissions. For example, passing in ["SELECT_TABLE"] returns only entities for which the current user has the SELECT_TABLE permission. This only takes effect for the list Interface. If empty, no permission filtering is performed.</p>
     * @param boolean $FetchOwners <p>Whether to return person in charge information in response. If this parameter is not passed or is true, the person in charge information is returned by default. If it is explicitly set to false, it is not returned.</p>
     * @param boolean $FetchUserInfo <p>Whether to convert user Uin to userName. Impact range: CreatorName/LastModifierName in Audit, OwnerName in MetaOwner. If not passed or set to true, conversion is executed (default conversion). If explicitly set to false, do not convert</p>
     * @param boolean $FetchMask <p>Whether to return field masking policy information. It is not returned by default. If true is passed in, the field masking policy information corresponding to the table fields will be queried.</p>
     * @param boolean $FetchTags <p>Whether to return tag information. By default, it is not returned. When set to true, APIs such as GetTable/ListTables/GetCatalog/ListCatalogs/GetSchema/ListSchemas/GetView/ListViews/GetFunction/ListFunctions/GetVolume/ListVolumes/GetModel/ListModels will return the Tags field in the corresponding entity.</p>
     * @param boolean $FetchDimensions <p>Whether to return the dictionary dimension information associated with the returned field. Default not passed, do not return</p>
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
        if (array_key_exists("FetchPermissions",$param) and $param["FetchPermissions"] !== null) {
            $this->FetchPermissions = $param["FetchPermissions"];
        }

        if (array_key_exists("FetchFeatureTableDetail",$param) and $param["FetchFeatureTableDetail"] !== null) {
            $this->FetchFeatureTableDetail = $param["FetchFeatureTableDetail"];
        }

        if (array_key_exists("FilterPermissions",$param) and $param["FilterPermissions"] !== null) {
            $this->FilterPermissions = $param["FilterPermissions"];
        }

        if (array_key_exists("FetchOwners",$param) and $param["FetchOwners"] !== null) {
            $this->FetchOwners = $param["FetchOwners"];
        }

        if (array_key_exists("FetchUserInfo",$param) and $param["FetchUserInfo"] !== null) {
            $this->FetchUserInfo = $param["FetchUserInfo"];
        }

        if (array_key_exists("FetchMask",$param) and $param["FetchMask"] !== null) {
            $this->FetchMask = $param["FetchMask"];
        }

        if (array_key_exists("FetchTags",$param) and $param["FetchTags"] !== null) {
            $this->FetchTags = $param["FetchTags"];
        }

        if (array_key_exists("FetchDimensions",$param) and $param["FetchDimensions"] !== null) {
            $this->FetchDimensions = $param["FetchDimensions"];
        }
    }
}
