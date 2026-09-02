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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDspmIdentifyComplianceCategoryRelation request structure.
 *
 * @method integer getComplianceId() Obtain <p>Identification template ID</p>
 * @method void setComplianceId(integer $ComplianceId) Set <p>Identification template ID</p>
 * @method integer getCategoryId() Obtain <p>Category ID</p>
 * @method void setCategoryId(integer $CategoryId) Set <p>Category ID</p>
 * @method integer getParentCategoryId() Obtain <p>Parent category ID</p>
 * @method void setParentCategoryId(integer $ParentCategoryId) Set <p>Parent category ID</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getOperationSource() Obtain <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
 * @method void setOperationSource(string $OperationSource) Set <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
 */
class CreateDspmIdentifyComplianceCategoryRelationRequest extends AbstractModel
{
    /**
     * @var integer <p>Identification template ID</p>
     */
    public $ComplianceId;

    /**
     * @var integer <p>Category ID</p>
     */
    public $CategoryId;

    /**
     * @var integer <p>Parent category ID</p>
     */
    public $ParentCategoryId;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
     */
    public $OperationSource;

    /**
     * @param integer $ComplianceId <p>Identification template ID</p>
     * @param integer $CategoryId <p>Category ID</p>
     * @param integer $ParentCategoryId <p>Parent category ID</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $OperationSource <p>Operation source: empty/dspm=database risk monitoring entry, cos=object storage risk monitoring entry</p>
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
        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ParentCategoryId",$param) and $param["ParentCategoryId"] !== null) {
            $this->ParentCategoryId = $param["ParentCategoryId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OperationSource",$param) and $param["OperationSource"] !== null) {
            $this->OperationSource = $param["OperationSource"];
        }
    }
}
