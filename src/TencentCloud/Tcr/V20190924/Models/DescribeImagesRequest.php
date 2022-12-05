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
 * DescribeImages request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 * @method string getRepositoryName() Obtain Image repository name
 * @method void setRepositoryName(string $RepositoryName) Set Image repository name
 * @method string getImageVersion() Obtain Image tag specified for fuzzy search
 * @method void setImageVersion(string $ImageVersion) Set Image tag specified for fuzzy search
 * @method integer getLimit() Obtain Number of entries per page, which is used for pagination. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of entries per page, which is used for pagination. Default value: 20.
 * @method integer getOffset() Obtain Page number. Default value: 1.
 * @method void setOffset(integer $Offset) Set Page number. Default value: 1.
 * @method string getDigest() Obtain Image digest specified for search
 * @method void setDigest(string $Digest) Set Image digest specified for search
 * @method boolean getExactMatch() Obtain Whether to use exact matching. Valid values: `true` (exact matching), `null` (fuzzy matching).
 * @method void setExactMatch(boolean $ExactMatch) Set Whether to use exact matching. Valid values: `true` (exact matching), `null` (fuzzy matching).
 */
class DescribeImagesRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @var string Image repository name
     */
    public $RepositoryName;

    /**
     * @var string Image tag specified for fuzzy search
     */
    public $ImageVersion;

    /**
     * @var integer Number of entries per page, which is used for pagination. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Page number. Default value: 1.
     */
    public $Offset;

    /**
     * @var string Image digest specified for search
     */
    public $Digest;

    /**
     * @var boolean Whether to use exact matching. Valid values: `true` (exact matching), `null` (fuzzy matching).
     */
    public $ExactMatch;

    /**
     * @param string $RegistryId Instance ID
     * @param string $NamespaceName Namespace name
     * @param string $RepositoryName Image repository name
     * @param string $ImageVersion Image tag specified for fuzzy search
     * @param integer $Limit Number of entries per page, which is used for pagination. Default value: 20.
     * @param integer $Offset Page number. Default value: 1.
     * @param string $Digest Image digest specified for search
     * @param boolean $ExactMatch Whether to use exact matching. Valid values: `true` (exact matching), `null` (fuzzy matching).
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

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
