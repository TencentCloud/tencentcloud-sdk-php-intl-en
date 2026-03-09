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
 * ListQualityRuleTemplates request structure.
 *
 * @method string getProjectId() Obtain Workspace ID.
 * @method void setProjectId(string $ProjectId) Set Workspace ID.
 * @method integer getPageNumber() Obtain Current page, which is 1 by default.
 * @method void setPageNumber(integer $PageNumber) Set Current page, which is 1 by default.
 * @method integer getPageSize() Obtain Number of records per page, which is 10 by default.
 * @method void setPageSize(integer $PageSize) Set Number of records per page, which is 10 by default.
 * @method array getOrderFields() Obtain Common sort.
Supported sorting fields:.
CitationCount - sort by number of references.
UpdateTime - sort by update time.
Sorting order:.
1 - ascending (ASC).
2 - descending (DESC).
 * @method void setOrderFields(array $OrderFields) Set Common sort.
Supported sorting fields:.
CitationCount - sort by number of references.
UpdateTime - sort by update time.
Sorting order:.
1 - ascending (ASC).
2 - descending (DESC).
 * @method array getFilters() Obtain Universal filter criteria.
1. Id
Description: template ID.
Value: unique identifier of the template.

2. Keyword
Description: search by keyword, supports template name fuzzy search.
Value: string.

3. Type
Description: template type.
Value: 1 - system template; 2 - custom template; support multiple values (OR relationship).

4. QualityDim
Describes the quality detection dimension.
Valid values: 1 - accuracy; 2 - uniqueness; 3 - integrity; 4 - consistency; 5 - timeliness; 6 - validity. support multiple values (OR relationship).

5. SourceObjectType
Describes the applicable source data object type for rule.
Value: 1 - constant; 2 - offline table level; 3 - offline field level; 4 - database level. supports multiple values (OR relationship).

6. SourceEngineTypes
Description: specifies the source data engine type to which the template applies.
Value: 1 - MySQL; 2 - Hive; 4 - Spark; 8 - Livy; 16 - DLC; 32 - Gbase; 64 - TCHouse-P; 128 - Doris; 256 - TCHouse-D; 512 - EMR_StarRocks; 1024 - TCHouse-X. supports multiple values (OR relationship).

 * @method void setFilters(array $Filters) Set Universal filter criteria.
1. Id
Description: template ID.
Value: unique identifier of the template.

2. Keyword
Description: search by keyword, supports template name fuzzy search.
Value: string.

3. Type
Description: template type.
Value: 1 - system template; 2 - custom template; support multiple values (OR relationship).

4. QualityDim
Describes the quality detection dimension.
Valid values: 1 - accuracy; 2 - uniqueness; 3 - integrity; 4 - consistency; 5 - timeliness; 6 - validity. support multiple values (OR relationship).

5. SourceObjectType
Describes the applicable source data object type for rule.
Value: 1 - constant; 2 - offline table level; 3 - offline field level; 4 - database level. supports multiple values (OR relationship).

6. SourceEngineTypes
Description: specifies the source data engine type to which the template applies.
Value: 1 - MySQL; 2 - Hive; 4 - Spark; 8 - Livy; 16 - DLC; 32 - Gbase; 64 - TCHouse-P; 128 - Doris; 256 - TCHouse-D; 512 - EMR_StarRocks; 1024 - TCHouse-X. supports multiple values (OR relationship).
 */
class ListQualityRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var string Workspace ID.
     */
    public $ProjectId;

    /**
     * @var integer Current page, which is 1 by default.
     */
    public $PageNumber;

    /**
     * @var integer Number of records per page, which is 10 by default.
     */
    public $PageSize;

    /**
     * @var array Common sort.
Supported sorting fields:.
CitationCount - sort by number of references.
UpdateTime - sort by update time.
Sorting order:.
1 - ascending (ASC).
2 - descending (DESC).
     */
    public $OrderFields;

    /**
     * @var array Universal filter criteria.
1. Id
Description: template ID.
Value: unique identifier of the template.

2. Keyword
Description: search by keyword, supports template name fuzzy search.
Value: string.

3. Type
Description: template type.
Value: 1 - system template; 2 - custom template; support multiple values (OR relationship).

4. QualityDim
Describes the quality detection dimension.
Valid values: 1 - accuracy; 2 - uniqueness; 3 - integrity; 4 - consistency; 5 - timeliness; 6 - validity. support multiple values (OR relationship).

5. SourceObjectType
Describes the applicable source data object type for rule.
Value: 1 - constant; 2 - offline table level; 3 - offline field level; 4 - database level. supports multiple values (OR relationship).

6. SourceEngineTypes
Description: specifies the source data engine type to which the template applies.
Value: 1 - MySQL; 2 - Hive; 4 - Spark; 8 - Livy; 16 - DLC; 32 - Gbase; 64 - TCHouse-P; 128 - Doris; 256 - TCHouse-D; 512 - EMR_StarRocks; 1024 - TCHouse-X. supports multiple values (OR relationship).

     */
    public $Filters;

    /**
     * @param string $ProjectId Workspace ID.
     * @param integer $PageNumber Current page, which is 1 by default.
     * @param integer $PageSize Number of records per page, which is 10 by default.
     * @param array $OrderFields Common sort.
Supported sorting fields:.
CitationCount - sort by number of references.
UpdateTime - sort by update time.
Sorting order:.
1 - ascending (ASC).
2 - descending (DESC).
     * @param array $Filters Universal filter criteria.
1. Id
Description: template ID.
Value: unique identifier of the template.

2. Keyword
Description: search by keyword, supports template name fuzzy search.
Value: string.

3. Type
Description: template type.
Value: 1 - system template; 2 - custom template; support multiple values (OR relationship).

4. QualityDim
Describes the quality detection dimension.
Valid values: 1 - accuracy; 2 - uniqueness; 3 - integrity; 4 - consistency; 5 - timeliness; 6 - validity. support multiple values (OR relationship).

5. SourceObjectType
Describes the applicable source data object type for rule.
Value: 1 - constant; 2 - offline table level; 3 - offline field level; 4 - database level. supports multiple values (OR relationship).

6. SourceEngineTypes
Description: specifies the source data engine type to which the template applies.
Value: 1 - MySQL; 2 - Hive; 4 - Spark; 8 - Livy; 16 - DLC; 32 - Gbase; 64 - TCHouse-P; 128 - Doris; 256 - TCHouse-D; 512 - EMR_StarRocks; 1024 - TCHouse-X. supports multiple values (OR relationship).
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
