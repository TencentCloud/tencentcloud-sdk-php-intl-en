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
 * Modify the status input of an AIGC document‑to‑video task
 *
 * @method string getAction() Obtain <p>Modification action type.</p><p>Enumeration values:</p><ul><li>confirm: Confirm completion of the stage and advance to the next stage</li><li>regenerate: Regenerate the specified stage</li></ul>
 * @method void setAction(string $Action) Set <p>Modification action type.</p><p>Enumeration values:</p><ul><li>confirm: Confirm completion of the stage and advance to the next stage</li><li>regenerate: Regenerate the specified stage</li></ul>
 * @method string getStage() Obtain <p>Modify the target stage.</p><p>Enumeration values:</p><ul><li>STAGE_1:<br>When Action=confirm: confirm the outline, continue generating subsequent dubbing, animation effects, and subtitles;<br>When Action=regenerate: regenerate the outline.</li></ul><ul><li>STAGE_2:<br>When Action=confirm: confirm the generated dubbing, animation effects, and subtitles, and generate the final video;<br>When Action=regenerate: regenerate the dubbing, animation effects, and subtitles.</li></ul>
 * @method void setStage(string $Stage) Set <p>Modify the target stage.</p><p>Enumeration values:</p><ul><li>STAGE_1:<br>When Action=confirm: confirm the outline, continue generating subsequent dubbing, animation effects, and subtitles;<br>When Action=regenerate: regenerate the outline.</li></ul><ul><li>STAGE_2:<br>When Action=confirm: confirm the generated dubbing, animation effects, and subtitles, and generate the final video;<br>When Action=regenerate: regenerate the dubbing, animation effects, and subtitles.</li></ul>
 * @method string getSourceTaskId() Obtain <p>ID of the target task that needs to be modified.</p>
 * @method void setSourceTaskId(string $SourceTaskId) Set <p>ID of the target task that needs to be modified.</p>
 * @method DocToVideoRegenerateInput getRegenerate() Obtain <p>Regenerate the parameter.</p><p>Required only when Action=regenerate.</p>
 * @method void setRegenerate(DocToVideoRegenerateInput $Regenerate) Set <p>Regenerate the parameter.</p><p>Required only when Action=regenerate.</p>
 */
class ModifyDocToVideoTaskStatusInput extends AbstractModel
{
    /**
     * @var string <p>Modification action type.</p><p>Enumeration values:</p><ul><li>confirm: Confirm completion of the stage and advance to the next stage</li><li>regenerate: Regenerate the specified stage</li></ul>
     */
    public $Action;

    /**
     * @var string <p>Modify the target stage.</p><p>Enumeration values:</p><ul><li>STAGE_1:<br>When Action=confirm: confirm the outline, continue generating subsequent dubbing, animation effects, and subtitles;<br>When Action=regenerate: regenerate the outline.</li></ul><ul><li>STAGE_2:<br>When Action=confirm: confirm the generated dubbing, animation effects, and subtitles, and generate the final video;<br>When Action=regenerate: regenerate the dubbing, animation effects, and subtitles.</li></ul>
     */
    public $Stage;

    /**
     * @var string <p>ID of the target task that needs to be modified.</p>
     */
    public $SourceTaskId;

    /**
     * @var DocToVideoRegenerateInput <p>Regenerate the parameter.</p><p>Required only when Action=regenerate.</p>
     */
    public $Regenerate;

    /**
     * @param string $Action <p>Modification action type.</p><p>Enumeration values:</p><ul><li>confirm: Confirm completion of the stage and advance to the next stage</li><li>regenerate: Regenerate the specified stage</li></ul>
     * @param string $Stage <p>Modify the target stage.</p><p>Enumeration values:</p><ul><li>STAGE_1:<br>When Action=confirm: confirm the outline, continue generating subsequent dubbing, animation effects, and subtitles;<br>When Action=regenerate: regenerate the outline.</li></ul><ul><li>STAGE_2:<br>When Action=confirm: confirm the generated dubbing, animation effects, and subtitles, and generate the final video;<br>When Action=regenerate: regenerate the dubbing, animation effects, and subtitles.</li></ul>
     * @param string $SourceTaskId <p>ID of the target task that needs to be modified.</p>
     * @param DocToVideoRegenerateInput $Regenerate <p>Regenerate the parameter.</p><p>Required only when Action=regenerate.</p>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("SourceTaskId",$param) and $param["SourceTaskId"] !== null) {
            $this->SourceTaskId = $param["SourceTaskId"];
        }

        if (array_key_exists("Regenerate",$param) and $param["Regenerate"] !== null) {
            $this->Regenerate = new DocToVideoRegenerateInput();
            $this->Regenerate->deserialize($param["Regenerate"]);
        }
    }
}
