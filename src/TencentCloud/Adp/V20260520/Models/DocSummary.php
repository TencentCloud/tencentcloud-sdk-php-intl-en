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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document digest information
 *
 * @method CategoryPath getCategoryPath() Obtain <p>Category path (including category ID, category ID path from the root node, and category name path)</p>
 * @method void setCategoryPath(CategoryPath $CategoryPath) Set <p>Category path (including category ID, category ID path from the root node, and category name path)</p>
 * @method string getDocId() Obtain <p>Document ID</p>
 * @method void setDocId(string $DocId) Set <p>Document ID</p>
 * @method KnowledgeScope getKnowledgeScope() Obtain <p>Knowledge effective scope (aggregate application scope + tag condition)</p>
 * @method void setKnowledgeScope(KnowledgeScope $KnowledgeScope) Set <p>Knowledge effective scope (aggregate application scope + tag condition)</p>
 * @method DocLifecycle getLifecycle() Obtain <p>Lifecycle information.</p>
 * @method void setLifecycle(DocLifecycle $Lifecycle) Set <p>Lifecycle information.</p>
 * @method DocMetadata getMetadata() Obtain <p>Meta information.</p>
 * @method void setMetadata(DocMetadata $Metadata) Set <p>Meta information.</p>
 * @method DocOperator getOperatorInfo() Obtain <p>Operator information (aggregate modifier + operation permission)</p>
 * @method void setOperatorInfo(DocOperator $OperatorInfo) Set <p>Operator information (aggregate modifier + operation permission)</p>
 * @method DocTaskStatus getTaskStatus() Obtain <p>Task status information</p>
 * @method void setTaskStatus(DocTaskStatus $TaskStatus) Set <p>Task status information</p>
 */
class DocSummary extends AbstractModel
{
    /**
     * @var CategoryPath <p>Category path (including category ID, category ID path from the root node, and category name path)</p>
     */
    public $CategoryPath;

    /**
     * @var string <p>Document ID</p>
     */
    public $DocId;

    /**
     * @var KnowledgeScope <p>Knowledge effective scope (aggregate application scope + tag condition)</p>
     */
    public $KnowledgeScope;

    /**
     * @var DocLifecycle <p>Lifecycle information.</p>
     */
    public $Lifecycle;

    /**
     * @var DocMetadata <p>Meta information.</p>
     */
    public $Metadata;

    /**
     * @var DocOperator <p>Operator information (aggregate modifier + operation permission)</p>
     */
    public $OperatorInfo;

    /**
     * @var DocTaskStatus <p>Task status information</p>
     */
    public $TaskStatus;

    /**
     * @param CategoryPath $CategoryPath <p>Category path (including category ID, category ID path from the root node, and category name path)</p>
     * @param string $DocId <p>Document ID</p>
     * @param KnowledgeScope $KnowledgeScope <p>Knowledge effective scope (aggregate application scope + tag condition)</p>
     * @param DocLifecycle $Lifecycle <p>Lifecycle information.</p>
     * @param DocMetadata $Metadata <p>Meta information.</p>
     * @param DocOperator $OperatorInfo <p>Operator information (aggregate modifier + operation permission)</p>
     * @param DocTaskStatus $TaskStatus <p>Task status information</p>
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
        if (array_key_exists("CategoryPath",$param) and $param["CategoryPath"] !== null) {
            $this->CategoryPath = new CategoryPath();
            $this->CategoryPath->deserialize($param["CategoryPath"]);
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("KnowledgeScope",$param) and $param["KnowledgeScope"] !== null) {
            $this->KnowledgeScope = new KnowledgeScope();
            $this->KnowledgeScope->deserialize($param["KnowledgeScope"]);
        }

        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = new DocLifecycle();
            $this->Lifecycle->deserialize($param["Lifecycle"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new DocMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("OperatorInfo",$param) and $param["OperatorInfo"] !== null) {
            $this->OperatorInfo = new DocOperator();
            $this->OperatorInfo->deserialize($param["OperatorInfo"]);
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = new DocTaskStatus();
            $this->TaskStatus->deserialize($param["TaskStatus"]);
        }
    }
}
