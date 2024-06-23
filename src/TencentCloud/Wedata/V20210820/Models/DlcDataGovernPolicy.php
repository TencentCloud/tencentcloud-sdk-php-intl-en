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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Governance Configuration Items
 *
 * @method DlcRewriteDataInfo getRewriteDataPolicy() Obtain Data Layout Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRewriteDataPolicy(DlcRewriteDataInfo $RewriteDataPolicy) Set Data Layout Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method DlcExpiredSnapshotsInfo getExpiredSnapshotsPolicy() Obtain Snapshot Expiration Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExpiredSnapshotsPolicy(DlcExpiredSnapshotsInfo $ExpiredSnapshotsPolicy) Set Snapshot Expiration Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method DlcRemoveOrphanFilesInfo getRemoveOrphanFilesPolicy() Obtain Remove Isolated Files Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemoveOrphanFilesPolicy(DlcRemoveOrphanFilesInfo $RemoveOrphanFilesPolicy) Set Remove Isolated Files Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method DlcMergeManifestsInfo getMergeManifestsPolicy() Obtain Merge Metadata Manifests Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMergeManifestsPolicy(DlcMergeManifestsInfo $MergeManifestsPolicy) Set Merge Metadata Manifests Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInheritDataBase() Obtain Integration Library Rules: default (Default Inheritance), none (No Inheritance)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInheritDataBase(string $InheritDataBase) Set Integration Library Rules: default (Default Inheritance), none (No Inheritance)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRuleType() Obtain Governance Rule Types, Customize: Custom Definition; Intelligence: Intelligent Governance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuleType(string $RuleType) Set Governance Rule Types, Customize: Custom Definition; Intelligence: Intelligent Governance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getGovernEngine() Obtain Governance Engine
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setGovernEngine(string $GovernEngine) Set Governance Engine
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DlcDataGovernPolicy extends AbstractModel
{
    /**
     * @var DlcRewriteDataInfo Data Layout Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RewriteDataPolicy;

    /**
     * @var DlcExpiredSnapshotsInfo Snapshot Expiration Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExpiredSnapshotsPolicy;

    /**
     * @var DlcRemoveOrphanFilesInfo Remove Isolated Files Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemoveOrphanFilesPolicy;

    /**
     * @var DlcMergeManifestsInfo Merge Metadata Manifests Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MergeManifestsPolicy;

    /**
     * @var string Integration Library Rules: default (Default Inheritance), none (No Inheritance)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InheritDataBase;

    /**
     * @var string Governance Rule Types, Customize: Custom Definition; Intelligence: Intelligent Governance
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuleType;

    /**
     * @var string Governance Engine
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $GovernEngine;

    /**
     * @param DlcRewriteDataInfo $RewriteDataPolicy Data Layout Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
     * @param DlcExpiredSnapshotsInfo $ExpiredSnapshotsPolicy Snapshot Expiration Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
     * @param DlcRemoveOrphanFilesInfo $RemoveOrphanFilesPolicy Remove Isolated Files Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
     * @param DlcMergeManifestsInfo $MergeManifestsPolicy Merge Metadata Manifests Governance Item
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InheritDataBase Integration Library Rules: default (Default Inheritance), none (No Inheritance)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RuleType Governance Rule Types, Customize: Custom Definition; Intelligence: Intelligent Governance
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $GovernEngine Governance Engine
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("RewriteDataPolicy",$param) and $param["RewriteDataPolicy"] !== null) {
            $this->RewriteDataPolicy = new DlcRewriteDataInfo();
            $this->RewriteDataPolicy->deserialize($param["RewriteDataPolicy"]);
        }

        if (array_key_exists("ExpiredSnapshotsPolicy",$param) and $param["ExpiredSnapshotsPolicy"] !== null) {
            $this->ExpiredSnapshotsPolicy = new DlcExpiredSnapshotsInfo();
            $this->ExpiredSnapshotsPolicy->deserialize($param["ExpiredSnapshotsPolicy"]);
        }

        if (array_key_exists("RemoveOrphanFilesPolicy",$param) and $param["RemoveOrphanFilesPolicy"] !== null) {
            $this->RemoveOrphanFilesPolicy = new DlcRemoveOrphanFilesInfo();
            $this->RemoveOrphanFilesPolicy->deserialize($param["RemoveOrphanFilesPolicy"]);
        }

        if (array_key_exists("MergeManifestsPolicy",$param) and $param["MergeManifestsPolicy"] !== null) {
            $this->MergeManifestsPolicy = new DlcMergeManifestsInfo();
            $this->MergeManifestsPolicy->deserialize($param["MergeManifestsPolicy"]);
        }

        if (array_key_exists("InheritDataBase",$param) and $param["InheritDataBase"] !== null) {
            $this->InheritDataBase = $param["InheritDataBase"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("GovernEngine",$param) and $param["GovernEngine"] !== null) {
            $this->GovernEngine = $param["GovernEngine"];
        }
    }
}
