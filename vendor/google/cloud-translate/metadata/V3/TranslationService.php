<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace GPBMetadata\Google\Cloud\Translate\V3;

class TranslationService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�Z
3google/cloud/translate/v3/translation_service.protogoogle.cloud.translation.v3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.proto"N
TranslateTextGlossaryConfig
glossary (	B�A
ignore_case (B�A"�
TranslateTextRequest
contents (	B�A
	mime_type (	B�A!
source_language_code (	B�A!
target_language_code (	B�A9
parent (	B)�A�A#
!locations.googleapis.com/Location
model (	B�AV
glossary_config (28.google.cloud.translation.v3.TranslateTextGlossaryConfigB�AR
labels
 (2=.google.cloud.translation.v3.TranslateTextRequest.LabelsEntryB�A-
LabelsEntry
key (	
value (	:8"�
TranslateTextResponse>
translations (2(.google.cloud.translation.v3.TranslationG
glossary_translations (2(.google.cloud.translation.v3.Translation"�
Translation
translated_text (	
model (	
detected_language_code (	Q
glossary_config (28.google.cloud.translation.v3.TranslateTextGlossaryConfig"�
DetectLanguageRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
model (	B�A
content (	H 
	mime_type (	B�AS
labels (2>.google.cloud.translation.v3.DetectLanguageRequest.LabelsEntryB�A-
LabelsEntry
key (	
value (	:8B
source"=
DetectedLanguage
language_code (	

confidence ("Z
DetectLanguageResponse@
	languages (2-.google.cloud.translation.v3.DetectedLanguage"�
GetSupportedLanguagesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location"
display_language_code (	B�A
model (	B�A"W
SupportedLanguagesA
	languages (2..google.cloud.translation.v3.SupportedLanguage"p
SupportedLanguage
language_code (	
display_name (	
support_source (
support_target ("#
	GcsSource
	input_uri (	B�A"m
InputConfig
	mime_type (	B�A<

gcs_source (2&.google.cloud.translation.v3.GcsSourceH B
source"0
GcsDestination
output_uri_prefix (	B�A"e
OutputConfigF
gcs_destination (2+.google.cloud.translation.v3.GcsDestinationH B
destination"�
DocumentInputConfig
content (H <

gcs_source (2&.google.cloud.translation.v3.GcsSourceH 
	mime_type (	B
source"�
DocumentOutputConfigK
gcs_destination (2+.google.cloud.translation.v3.GcsDestinationB�AH 
	mime_type (	B�AB
destination"�
TranslateDocumentRequest
parent (	B�A!
source_language_code (	B�A!
target_language_code (	B�AT
document_input_config (20.google.cloud.translation.v3.DocumentInputConfigB�AV
document_output_config (21.google.cloud.translation.v3.DocumentOutputConfigB�A
model (	B�AV
glossary_config (28.google.cloud.translation.v3.TranslateTextGlossaryConfigB�AV
labels (2A.google.cloud.translation.v3.TranslateDocumentRequest.LabelsEntryB�A#
customized_attribution
 (	B�A)
is_translate_native_pdf_only (B�A-
 enable_shadow_removal_native_pdf (B�A-
LabelsEntry
key (	
value (	:8"e
DocumentTranslation
byte_stream_outputs (
	mime_type (	
detected_language_code (	"�
TranslateDocumentResponseN
document_translation (20.google.cloud.translation.v3.DocumentTranslationW
glossary_document_translation (20.google.cloud.translation.v3.DocumentTranslation
model (	Q
glossary_config (28.google.cloud.translation.v3.TranslateTextGlossaryConfig"�
BatchTranslateTextRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location!
source_language_code (	B�A"
target_language_codes (	B�AW
models (2B.google.cloud.translation.v3.BatchTranslateTextRequest.ModelsEntryB�AD
input_configs (2(.google.cloud.translation.v3.InputConfigB�AE
output_config (2).google.cloud.translation.v3.OutputConfigB�A_

glossaries (2F.google.cloud.translation.v3.BatchTranslateTextRequest.GlossariesEntryB�AW
labels	 (2B.google.cloud.translation.v3.BatchTranslateTextRequest.LabelsEntryB�A-
ModelsEntry
key (	
value (	:8k
GlossariesEntry
key (	G
value (28.google.cloud.translation.v3.TranslateTextGlossaryConfig:8-
LabelsEntry
key (	
value (	:8"�
BatchTranslateMetadataH
state (29.google.cloud.translation.v3.BatchTranslateMetadata.State
translated_characters (
failed_characters (
total_characters (/
submit_time (2.google.protobuf.Timestamp"e
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED

FAILED

CANCELLING
	CANCELLED"�
BatchTranslateResponse
total_characters (
translated_characters (
failed_characters (/
submit_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"]
GlossaryInputConfig<

gcs_source (2&.google.cloud.translation.v3.GcsSourceH B
source"�
Glossary
name (	B�AO
language_pair (26.google.cloud.translation.v3.Glossary.LanguageCodePairH T
language_codes_set (26.google.cloud.translation.v3.Glossary.LanguageCodesSetH F
input_config (20.google.cloud.translation.v3.GlossaryInputConfig
entry_count (B�A4
submit_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
display_name	 (	B�AN
LanguageCodePair
source_language_code (	
target_language_code (	*
LanguageCodesSet
language_codes (	:e�Ab
!translate.googleapis.com/Glossary=projects/{project}/locations/{location}/glossaries/{glossary}B
	languages"�
CreateGlossaryRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location<
glossary (2%.google.cloud.translation.v3.GlossaryB�A"M
GetGlossaryRequest7
name (	B)�A�A#
!translate.googleapis.com/Glossary"P
DeleteGlossaryRequest7
name (	B)�A�A#
!translate.googleapis.com/Glossary"�
ListGlossariesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A"l
ListGlossariesResponse9

glossaries (2%.google.cloud.translation.v3.Glossary
next_page_token (	"�
CreateGlossaryMetadata
name (	H
state (29.google.cloud.translation.v3.CreateGlossaryMetadata.State/
submit_time (2.google.protobuf.Timestamp"e
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED

FAILED

CANCELLING
	CANCELLED"�
DeleteGlossaryMetadata
name (	H
state (29.google.cloud.translation.v3.DeleteGlossaryMetadata.State/
submit_time (2.google.protobuf.Timestamp"e
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED

FAILED

CANCELLING
	CANCELLED"�
DeleteGlossaryResponse
name (	/
submit_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"�
BatchTranslateDocumentRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location!
source_language_code (	B�A"
target_language_codes (	B�AQ
input_configs (25.google.cloud.translation.v3.BatchDocumentInputConfigB�AR
output_config (26.google.cloud.translation.v3.BatchDocumentOutputConfigB�A[
models (2F.google.cloud.translation.v3.BatchTranslateDocumentRequest.ModelsEntryB�Ac

glossaries (2J.google.cloud.translation.v3.BatchTranslateDocumentRequest.GlossariesEntryB�Ar
format_conversions (2Q.google.cloud.translation.v3.BatchTranslateDocumentRequest.FormatConversionsEntryB�A#
customized_attribution
 (	B�A-
ModelsEntry
key (	
value (	:8k
GlossariesEntry
key (	G
value (28.google.cloud.translation.v3.TranslateTextGlossaryConfig:88
FormatConversionsEntry
key (	
value (	:8"b
BatchDocumentInputConfig<

gcs_source (2&.google.cloud.translation.v3.GcsSourceH B
source"r
BatchDocumentOutputConfigF
gcs_destination (2+.google.cloud.translation.v3.GcsDestinationH B
destination"�
BatchTranslateDocumentResponse
total_pages (
translated_pages (
failed_pages (
total_billable_pages (
total_characters (
translated_characters (
failed_characters (!
total_billable_characters (/
submit_time	 (2.google.protobuf.Timestamp,
end_time
 (2.google.protobuf.Timestamp"�
BatchTranslateDocumentMetadataP
state (2A.google.cloud.translation.v3.BatchTranslateDocumentMetadata.State
total_pages (
translated_pages (
failed_pages (
total_billable_pages (
total_characters (
translated_characters (
failed_characters (!
total_billable_characters	 (/
submit_time
 (2.google.protobuf.Timestamp"e
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED

FAILED

CANCELLING
	CANCELLED2�
TranslationService�
TranslateText1.google.cloud.translation.v3.TranslateTextRequest2.google.cloud.translation.v3.TranslateTextResponse"����b"1/v3/{parent=projects/*/locations/*}:translateText:*Z*"%/v3/{parent=projects/*}:translateText:*�A$parent,target_language_code,contents�AIparent,model,mime_type,source_language_code,target_language_code,contents�
DetectLanguage2.google.cloud.translation.v3.DetectLanguageRequest3.google.cloud.translation.v3.DetectLanguageResponse"����d"2/v3/{parent=projects/*/locations/*}:detectLanguage:*Z+"&/v3/{parent=projects/*}:detectLanguage:*�Aparent,model,mime_type,content�
GetSupportedLanguages9.google.cloud.translation.v3.GetSupportedLanguagesRequest/.google.cloud.translation.v3.SupportedLanguages"����f6/v3/{parent=projects/*/locations/*}/supportedLanguagesZ,*/v3/{parent=projects/*}/supportedLanguages�A"parent,model,display_language_code�
TranslateDocument5.google.cloud.translation.v3.TranslateDocumentRequest6.google.cloud.translation.v3.TranslateDocumentResponse"@���:"5/v3/{parent=projects/*/locations/*}:translateDocument:*�
BatchTranslateText6.google.cloud.translation.v3.BatchTranslateTextRequest.google.longrunning.Operation"t���;"6/v3/{parent=projects/*/locations/*}:batchTranslateText:*�A0
BatchTranslateResponseBatchTranslateMetadata�
BatchTranslateDocument:.google.cloud.translation.v3.BatchTranslateDocumentRequest.google.longrunning.Operation"����?":/v3/{parent=projects/*/locations/*}:batchTranslateDocument:*�AMparent,source_language_code,target_language_codes,input_configs,output_config�A@
BatchTranslateDocumentResponseBatchTranslateDocumentMetadata�
CreateGlossary2.google.cloud.translation.v3.CreateGlossaryRequest.google.longrunning.Operation"w���:"./v3/{parent=projects/*/locations/*}/glossaries:glossary�Aparent,glossary�A"
GlossaryCreateGlossaryMetadata�
ListGlossaries2.google.cloud.translation.v3.ListGlossariesRequest3.google.cloud.translation.v3.ListGlossariesResponse"?���0./v3/{parent=projects/*/locations/*}/glossaries�Aparent�
GetGlossary/.google.cloud.translation.v3.GetGlossaryRequest%.google.cloud.translation.v3.Glossary"=���0./v3/{name=projects/*/locations/*/glossaries/*}�Aname�
DeleteGlossary2.google.cloud.translation.v3.DeleteGlossaryRequest.google.longrunning.Operation"p���0*./v3/{name=projects/*/locations/*/glossaries/*}�Aname�A0
DeleteGlossaryResponseDeleteGlossaryMetadata~�Atranslate.googleapis.com�A`https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-translationB�
com.google.cloud.translate.v3BTranslationServiceProtoPZ;cloud.google.com/go/translate/apiv3/translatepb;translatepb��Google.Cloud.Translate.V3�Google\\Cloud\\Translate\\V3�Google::Cloud::Translate::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

