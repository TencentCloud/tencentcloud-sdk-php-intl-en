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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input information for regenerating an AIGC document-to-video task
 *
 * @method string getScope() Obtain <p>Regeneration scope.</p><p>Enumeration values:</p><ul><li>full: Full regeneration at this stage (for example, modifying the overall number of scenarios)</li><li>scenes: Partial regeneration by scenario (for example, modifying the specific content of a scenario)</li></ul>
 * @method void setScope(string $Scope) Set <p>Regeneration scope.</p><p>Enumeration values:</p><ul><li>full: Full regeneration at this stage (for example, modifying the overall number of scenarios)</li><li>scenes: Partial regeneration by scenario (for example, modifying the specific content of a scenario)</li></ul>
 * @method string getPrompt() Obtain <p>Prompt content for regeneration.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt content for regeneration.</p>
 * @method array getSceneIds() Obtain <p>Target page ID array for partial regeneration by page. Required only when Scope=scenes. Not repeatable. Up to 5 pages can be regenerated at a time.</p>
 * @method void setSceneIds(array $SceneIds) Set <p>Target page ID array for partial regeneration by page. Required only when Scope=scenes. Not repeatable. Up to 5 pages can be regenerated at a time.</p>
 */
class DocToVideoRegenerateInput extends AbstractModel
{
    /**
     * @var string <p>Regeneration scope.</p><p>Enumeration values:</p><ul><li>full: Full regeneration at this stage (for example, modifying the overall number of scenarios)</li><li>scenes: Partial regeneration by scenario (for example, modifying the specific content of a scenario)</li></ul>
     */
    public $Scope;

    /**
     * @var string <p>Prompt content for regeneration.</p>
     */
    public $Prompt;

    /**
     * @var array <p>Target page ID array for partial regeneration by page. Required only when Scope=scenes. Not repeatable. Up to 5 pages can be regenerated at a time.</p>
     */
    public $SceneIds;

    /**
     * @param string $Scope <p>Regeneration scope.</p><p>Enumeration values:</p><ul><li>full: Full regeneration at this stage (for example, modifying the overall number of scenarios)</li><li>scenes: Partial regeneration by scenario (for example, modifying the specific content of a scenario)</li></ul>
     * @param string $Prompt <p>Prompt content for regeneration.</p>
     * @param array $SceneIds <p>Target page ID array for partial regeneration by page. Required only when Scope=scenes. Not repeatable. Up to 5 pages can be regenerated at a time.</p>
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("SceneIds",$param) and $param["SceneIds"] !== null) {
            $this->SceneIds = $param["SceneIds"];
        }
    }
}
