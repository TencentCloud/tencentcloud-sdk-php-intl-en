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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListWorkflowPermissions request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getEntityId() Obtain Authorize entity ID.
 * @method void setEntityId(string $EntityId) Set Authorize entity ID.
 * @method string getEntityType() Obtain Authorized entity type, folder/workflow.
 * @method void setEntityType(string $EntityType) Set Authorized entity type, folder/workflow.
 * @method integer getPageNumber() Obtain The page number of the requested data. the default value is 1. the value must be equal to or greater than 1.
 * @method void setPageNumber(integer $PageNumber) Set The page number of the requested data. the default value is 1. the value must be equal to or greater than 1.
 * @method integer getPageSize() Obtain Number of data records displayed per page. default value is 10. minimum value is 10. maximum value is 200.
 * @method void setPageSize(integer $PageSize) Set Number of data records displayed per page. default value is 10. minimum value is 10. maximum value is 200.
 */
class ListWorkflowPermissionsRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Authorize entity ID.
     */
    public $EntityId;

    /**
     * @var string Authorized entity type, folder/workflow.
     */
    public $EntityType;

    /**
     * @var integer The page number of the requested data. the default value is 1. the value must be equal to or greater than 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of data records displayed per page. default value is 10. minimum value is 10. maximum value is 200.
     */
    public $PageSize;

    /**
     * @param string $ProjectId Project ID.
     * @param string $EntityId Authorize entity ID.
     * @param string $EntityType Authorized entity type, folder/workflow.
     * @param integer $PageNumber The page number of the requested data. the default value is 1. the value must be equal to or greater than 1.
     * @param integer $PageSize Number of data records displayed per page. default value is 10. minimum value is 10. maximum value is 200.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
